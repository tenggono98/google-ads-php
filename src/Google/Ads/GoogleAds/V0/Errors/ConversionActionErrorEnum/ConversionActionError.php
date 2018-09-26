<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/conversion_action_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\ConversionActionErrorEnum;

/**
 * Enum describing possible conversion action errors.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.ConversionActionErrorEnum.ConversionActionError</code>
 */
class ConversionActionError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The specified conversion action name already exists.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAME = 2;</code>
     */
    const DUPLICATE_NAME = 2;
    /**
     * Another conversion action with the specified app id already exists.
     *
     * Generated from protobuf enum <code>DUPLICATE_APP_ID = 3;</code>
     */
    const DUPLICATE_APP_ID = 3;
    /**
     * Android first open action conflicts with Google play codeless download
     * action tracking the same app.
     *
     * Generated from protobuf enum <code>TWO_CONVERSION_ACTIONS_BIDDING_ON_SAME_APP_DOWNLOAD = 4;</code>
     */
    const TWO_CONVERSION_ACTIONS_BIDDING_ON_SAME_APP_DOWNLOAD = 4;
    /**
     * Android first open action conflicts with Google play codeless download
     * action tracking the same app.
     *
     * Generated from protobuf enum <code>BIDDING_ON_SAME_APP_DOWNLOAD_AS_GLOBAL_ACTION = 5;</code>
     */
    const BIDDING_ON_SAME_APP_DOWNLOAD_AS_GLOBAL_ACTION = 5;
    /**
     * The attribution model cannot be set to DATA_DRIVEN because a data-driven
     * model has never been generated.
     *
     * Generated from protobuf enum <code>DATA_DRIVEN_MODEL_WAS_NEVER_GENERATED = 6;</code>
     */
    const DATA_DRIVEN_MODEL_WAS_NEVER_GENERATED = 6;
    /**
     * The attribution model cannot be set to DATA_DRIVEN because the
     * data-driven model is expired.
     *
     * Generated from protobuf enum <code>DATA_DRIVEN_MODEL_EXPIRED = 7;</code>
     */
    const DATA_DRIVEN_MODEL_EXPIRED = 7;
    /**
     * The attribution model cannot be set to DATA_DRIVEN because the
     * data-driven model is stale.
     *
     * Generated from protobuf enum <code>DATA_DRIVEN_MODEL_STALE = 8;</code>
     */
    const DATA_DRIVEN_MODEL_STALE = 8;
    /**
     * The attribution model cannot be set to DATA_DRIVEN because the
     * data-driven model is unavailable or the conversion action was newly
     * added.
     *
     * Generated from protobuf enum <code>DATA_DRIVEN_MODEL_UNKNOWN = 9;</code>
     */
    const DATA_DRIVEN_MODEL_UNKNOWN = 9;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionActionError::class, \Google\Ads\GoogleAds\V0\Errors\ConversionActionErrorEnum_ConversionActionError::class);

