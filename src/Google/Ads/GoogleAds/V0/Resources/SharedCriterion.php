<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/shared_criterion.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A criterion belonging to a shared set.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.SharedCriterion</code>
 */
class SharedCriterion extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the shared criterion.
     * Shared set resource names have the form:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}_{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2;</code>
     */
    private $shared_set = null;
    /**
     * The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26;</code>
     */
    private $criterion_id = null;
    /**
     * The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CriterionTypeEnum.CriterionType type = 4;</code>
     */
    private $type = 0;
    protected $criterion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the shared criterion.
     *           Shared set resource names have the form:
     *           `customers/{customer_id}/sharedCriteria/{shared_set_id}_{criterion_id}`
     *     @type \Google\Protobuf\StringValue $shared_set
     *           The shared set to which the shared criterion belongs.
     *     @type \Google\Protobuf\Int64Value $criterion_id
     *           The ID of the criterion.
     *           This field is ignored for mutates.
     *     @type int $type
     *           The type of the criterion.
     *     @type \Google\Ads\GoogleAds\V0\Common\KeywordInfo $keyword
     *           Keyword.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\SharedCriterion::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the shared criterion.
     * Shared set resource names have the form:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}_{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the shared criterion.
     * Shared set resource names have the form:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}_{criterion_id}`
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
     * The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSharedSet()
    {
        return $this->shared_set;
    }

    /**
     * The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSharedSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->shared_set = $var;

        return $this;
    }

    /**
     * The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCriterionId()
    {
        return $this->criterion_id;
    }

    /**
     * The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26;</code>
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
     * The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CriterionTypeEnum.CriterionType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CriterionTypeEnum.CriterionType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\CriterionTypeEnum_CriterionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.KeywordInfo keyword = 3;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\KeywordInfo
     */
    public function getKeyword()
    {
        return $this->readOneof(3);
    }

    /**
     * Keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.KeywordInfo keyword = 3;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\KeywordInfo $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\KeywordInfo::class);
        $this->writeOneof(3, $var);

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

