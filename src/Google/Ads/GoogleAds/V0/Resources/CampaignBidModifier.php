<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/campaign_bid_modifier.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a bid-modifiable only criterion at the campaign level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.CampaignBidModifier</code>
 */
class CampaignBidModifier extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign bid modifier.
     * Campaign bid modifier resource names have the form:
     * `customers/{customer_id}/campaignBidModifiers/{campaign_id}_{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The campaign to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     */
    private $campaign = null;
    /**
     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     */
    private $criterion_id = null;
    /**
     * The modifier for the bid when the criterion matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     */
    private $bid_modifier = null;
    protected $criterion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the campaign bid modifier.
     *           Campaign bid modifier resource names have the form:
     *           `customers/{customer_id}/campaignBidModifiers/{campaign_id}_{criterion_id}`
     *     @type \Google\Protobuf\StringValue $campaign
     *           The campaign to which this criterion belongs.
     *     @type \Google\Protobuf\Int64Value $criterion_id
     *           The ID of the criterion to bid modify.
     *           This field is ignored for mutates.
     *     @type \Google\Protobuf\DoubleValue $bid_modifier
     *           The modifier for the bid when the criterion matches.
     *     @type \Google\Ads\GoogleAds\V0\Common\InteractionTypeInfo $interaction_type
     *           Criterion for interaction type. Only supported for search campaigns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\CampaignBidModifier::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the campaign bid modifier.
     * Campaign bid modifier resource names have the form:
     * `customers/{customer_id}/campaignBidModifiers/{campaign_id}_{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the campaign bid modifier.
     * Campaign bid modifier resource names have the form:
     * `customers/{customer_id}/campaignBidModifiers/{campaign_id}_{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The campaign to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * The campaign to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCriterionId()
    {
        return $this->criterion_id;
    }

    /**
     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCriterionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->criterion_id = $var;

        return $this;
    }

    /**
     * The modifier for the bid when the criterion matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getBidModifier()
    {
        return $this->bid_modifier;
    }

    /**
     * The modifier for the bid when the criterion matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->bid_modifier = $var;

        return $this;
    }

    /**
     * Criterion for interaction type. Only supported for search campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.InteractionTypeInfo interaction_type = 5;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\InteractionTypeInfo
     */
    public function getInteractionType()
    {
        return $this->readOneof(5);
    }

    /**
     * Criterion for interaction type. Only supported for search campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.InteractionTypeInfo interaction_type = 5;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\InteractionTypeInfo $var
     * @return $this
     */
    public function setInteractionType($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\InteractionTypeInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCriterion()
    {
        return $this->whichOneof("criterion");
    }

}

