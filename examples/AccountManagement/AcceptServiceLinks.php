<?php

/**
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Examples\AccountManagement;

require __DIR__ . '/../../vendor/autoload.php';

use GetOpt\GetOpt;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentNames;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentParser;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\Lib\V3\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V3\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\V3\GoogleAdsException;
use Google\Ads\GoogleAds\Util\FieldMasks;
use Google\Ads\GoogleAds\V3\Enums\MerchantCenterLinkStatusEnum\MerchantCenterLinkStatus;
use Google\Ads\GoogleAds\V3\Errors\GoogleAdsError;
use Google\Ads\GoogleAds\V3\Resources\MerchantCenterLink;
use Google\Ads\GoogleAds\V3\Services\MerchantCenterLinkOperation;
use Google\ApiCore\ApiException;

/**
 * This code example accepts all pending invitations from Google Merchant Center accounts
 * to your Google Ads account.
 */
class AcceptServiceLinks
{
    private const CUSTOMER_ID = 'INSERT_CUSTOMER_ID_HERE';

    public static function main()
    {
        // Either pass the required parameters for this example on the command line, or insert them
        // into the constants above.
        $options = (new ArgumentParser())->parseCommandArguments([
            ArgumentNames::CUSTOMER_ID => GetOpt::REQUIRED_ARGUMENT
        ]);

        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct a Google Ads client configured from a properties file and the
        // OAuth2 credentials above.
        $googleAdsClient = (new GoogleAdsClientBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        try {
            self::runExample(
                $googleAdsClient,
                $options[ArgumentNames::CUSTOMER_ID] ?: self::CUSTOMER_ID
            );
        } catch (GoogleAdsException $googleAdsException) {
            printf(
                "Request with ID '%s' has failed.%sGoogle Ads failure details:%s",
                $googleAdsException->getRequestId(),
                PHP_EOL,
                PHP_EOL
            );
            foreach ($googleAdsException->getGoogleAdsFailure()->getErrors() as $error) {
                /** @var GoogleAdsError $error */
                printf(
                    "\t%s: %s%s",
                    $error->getErrorCode()->getErrorCode(),
                    $error->getMessage(),
                    PHP_EOL
                );
            }
        } catch (ApiException $apiException) {
            printf(
                "ApiException was thrown with message '%s'.%s",
                $apiException->getMessage(),
                PHP_EOL
            );
        }
    }

    /**
     * Runs the example.
     *
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the customer ID
     */
    public static function runExample(GoogleAdsClient $googleAdsClient, int $customerId)
    {
        // Lists all merchant links of the specified customer ID.
        $merchantCenterLinkServiceClient = $googleAdsClient->getMerchantCenterLinkServiceClient();
        $response = $merchantCenterLinkServiceClient->listMerchantCenterLinks($customerId);
        foreach ($response->getMerchantCenterLinks() as $merchantCenterLink) {
            /** @var MerchantCenterLink $merchantCenterLink */
            if ($merchantCenterLink->getStatus() === MerchantCenterLinkStatus::PENDING) {
                // Enables the pending link.
                $merchantCenterLinkToUpdate = new MerchantCenterLink([
                    'resource_name' => $merchantCenterLink->getResourceName(),
                    'status' => MerchantCenterLinkStatus::ENABLED
                ]);

                // Constructs an operation that will update the merchant center link,
                // using the FieldMasks utility to derive the update mask. This mask tells the
                // Google Ads API which attributes of the merchant center link you want to change.
                $merchantCenterLinkOperation = new MerchantCenterLinkOperation();
                $merchantCenterLinkOperation->setUpdate($merchantCenterLinkToUpdate);
                $merchantCenterLinkOperation->setUpdateMask(
                    FieldMasks::allSetFieldsOf($merchantCenterLinkToUpdate)
                );

                // Issues a mutate request to update the merchant center link and prints some
                // information.
                $response = $merchantCenterLinkServiceClient->mutateMerchantCenterLink(
                    $customerId,
                    $merchantCenterLinkOperation
                );
                printf(
                    "Enabled a Merchant Center Link with resource name '%s' to the Google Ads "
                    . "account '%s'.%s",
                    $response->getResult()->getResourceName(),
                    $customerId,
                    PHP_EOL
                );
            }
        }
    }
}

AcceptServiceLinks::main();
