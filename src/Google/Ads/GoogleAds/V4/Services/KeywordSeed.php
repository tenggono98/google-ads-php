<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Keyword Seed
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.KeywordSeed</code>
 */
class KeywordSeed extends \Google\Protobuf\Internal\Message
{
    /**
     * Requires at least one keyword.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue keywords = 1;</code>
     */
    private $keywords;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $keywords
     *           Requires at least one keyword.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Requires at least one keyword.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue keywords = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Requires at least one keyword.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue keywords = 1;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeywords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->keywords = $arr;

        return $this;
    }

}
