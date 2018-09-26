<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/billing_setup_status.proto

namespace Google\Ads\GoogleAds\V0\Enums\BillingSetupStatusEnum;

/**
 * The possible statuses of a BillingSetup.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.BillingSetupStatusEnum.BillingSetupStatus</code>
 */
class BillingSetupStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The billing setup is pending approval.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    const PENDING = 2;
    /**
     * The billing setup has been approved but the corresponding first budget
     * has not.  This can only occur for billing setups configured for monthly
     * invoicing.
     *
     * Generated from protobuf enum <code>APPROVED_HELD = 3;</code>
     */
    const APPROVED_HELD = 3;
    /**
     * The billing setup has been approved.
     *
     * Generated from protobuf enum <code>APPROVED = 4;</code>
     */
    const APPROVED = 4;
    /**
     * The billing setup was cancelled by the user prior to approval.
     *
     * Generated from protobuf enum <code>CANCELLED = 5;</code>
     */
    const CANCELLED = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BillingSetupStatus::class, \Google\Ads\GoogleAds\V0\Enums\BillingSetupStatusEnum_BillingSetupStatus::class);

