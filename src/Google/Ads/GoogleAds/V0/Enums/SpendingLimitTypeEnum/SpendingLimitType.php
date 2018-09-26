<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/spending_limit_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\SpendingLimitTypeEnum;

/**
 * The possible spending limit types used by certain resources as an
 * alternative to absolute money values in micros.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.SpendingLimitTypeEnum.SpendingLimitType</code>
 */
class SpendingLimitType
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
     * Infinite, indicates unlimited spending power.
     *
     * Generated from protobuf enum <code>INFINITE = 2;</code>
     */
    const INFINITE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpendingLimitType::class, \Google\Ads\GoogleAds\V0\Enums\SpendingLimitTypeEnum_SpendingLimitType::class);

