<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.protobuf.EnumOptions</code>
 */
class EnumOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Set this option to true to allow mapping different tag names to the same
     * value.
     *
     * Generated from protobuf field <code>optional bool allow_alias = 2;</code>
     */
    protected $allow_alias = null;
    /**
     * Is this enum deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the enum, or it will be completely ignored; in the very least, this
     * is a formalization for deprecating enums.
     *
     * Generated from protobuf field <code>optional bool deprecated = 3 [default = false];</code>
     */
    protected $deprecated = null;
    /**
     * Enable the legacy handling of JSON field name conflicts.  This lowercases
     * and strips underscored from the fields before comparison in proto3 only.
     * The new behavior takes `json_name` into account and applies to proto2 as
     * well.
     * TODO Remove this legacy behavior once downstream teams have
     * had time to migrate.
     *
     * Generated from protobuf field <code>optional bool deprecated_legacy_json_field_conflicts = 6 [deprecated = true];</code>
     * @deprecated
     */
    protected $deprecated_legacy_json_field_conflicts = null;
    /**
     * Any features defined in the specific edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet features = 7;</code>
     */
    protected $features = null;
    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    private $uninterpreted_option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $allow_alias
     *           Set this option to true to allow mapping different tag names to the same
     *           value.
     *     @type bool $deprecated
     *           Is this enum deprecated?
     *           Depending on the target platform, this can emit Deprecated annotations
     *           for the enum, or it will be completely ignored; in the very least, this
     *           is a formalization for deprecating enums.
     *     @type bool $deprecated_legacy_json_field_conflicts
     *           Enable the legacy handling of JSON field name conflicts.  This lowercases
     *           and strips underscored from the fields before comparison in proto3 only.
     *           The new behavior takes `json_name` into account and applies to proto2 as
     *           well.
     *           TODO Remove this legacy behavior once downstream teams have
     *           had time to migrate.
     *     @type \Google\Protobuf\Internal\FeatureSet $features
     *           Any features defined in the specific edition.
     *     @type array<\Google\Protobuf\Internal\UninterpretedOption>|\Google\Protobuf\Internal\RepeatedField $uninterpreted_option
     *           The parser stores options it doesn't recognize here. See above.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Set this option to true to allow mapping different tag names to the same
     * value.
     *
     * Generated from protobuf field <code>optional bool allow_alias = 2;</code>
     * @return bool
     */
    public function getAllowAlias()
    {
        return isset($this->allow_alias) ? $this->allow_alias : false;
    }

    public function hasAllowAlias()
    {
        return isset($this->allow_alias);
    }

    public function clearAllowAlias()
    {
        unset($this->allow_alias);
    }

    /**
     * Set this option to true to allow mapping different tag names to the same
     * value.
     *
     * Generated from protobuf field <code>optional bool allow_alias = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowAlias($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_alias = $var;

        return $this;
    }

    /**
     * Is this enum deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the enum, or it will be completely ignored; in the very least, this
     * is a formalization for deprecating enums.
     *
     * Generated from protobuf field <code>optional bool deprecated = 3 [default = false];</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return isset($this->deprecated) ? $this->deprecated : false;
    }

    public function hasDeprecated()
    {
        return isset($this->deprecated);
    }

    public function clearDeprecated()
    {
        unset($this->deprecated);
    }

    /**
     * Is this enum deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the enum, or it will be completely ignored; in the very least, this
     * is a formalization for deprecating enums.
     *
     * Generated from protobuf field <code>optional bool deprecated = 3 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;

        return $this;
    }

    /**
     * Enable the legacy handling of JSON field name conflicts.  This lowercases
     * and strips underscored from the fields before comparison in proto3 only.
     * The new behavior takes `json_name` into account and applies to proto2 as
     * well.
     * TODO Remove this legacy behavior once downstream teams have
     * had time to migrate.
     *
     * Generated from protobuf field <code>optional bool deprecated_legacy_json_field_conflicts = 6 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getDeprecatedLegacyJsonFieldConflicts()
    {
        if (isset($this->deprecated_legacy_json_field_conflicts)) {
            @trigger_error('deprecated_legacy_json_field_conflicts is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->deprecated_legacy_json_field_conflicts) ? $this->deprecated_legacy_json_field_conflicts : false;
    }

    public function hasDeprecatedLegacyJsonFieldConflicts()
    {
        if (isset($this->deprecated_legacy_json_field_conflicts)) {
            @trigger_error('deprecated_legacy_json_field_conflicts is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->deprecated_legacy_json_field_conflicts);
    }

    public function clearDeprecatedLegacyJsonFieldConflicts()
    {
        @trigger_error('deprecated_legacy_json_field_conflicts is deprecated.', E_USER_DEPRECATED);
        unset($this->deprecated_legacy_json_field_conflicts);
    }

    /**
     * Enable the legacy handling of JSON field name conflicts.  This lowercases
     * and strips underscored from the fields before comparison in proto3 only.
     * The new behavior takes `json_name` into account and applies to proto2 as
     * well.
     * TODO Remove this legacy behavior once downstream teams have
     * had time to migrate.
     *
     * Generated from protobuf field <code>optional bool deprecated_legacy_json_field_conflicts = 6 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setDeprecatedLegacyJsonFieldConflicts($var)
    {
        @trigger_error('deprecated_legacy_json_field_conflicts is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->deprecated_legacy_json_field_conflicts = $var;

        return $this;
    }

    /**
     * Any features defined in the specific edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet features = 7;</code>
     * @return \Google\Protobuf\Internal\FeatureSet|null
     */
    public function getFeatures()
    {
        return $this->features;
    }

    public function hasFeatures()
    {
        return isset($this->features);
    }

    public function clearFeatures()
    {
        unset($this->features);
    }

    /**
     * Any features defined in the specific edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet features = 7;</code>
     * @param \Google\Protobuf\Internal\FeatureSet $var
     * @return $this
     */
    public function setFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Internal\FeatureSet::class);
        $this->features = $var;

        return $this;
    }

    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUninterpretedOption()
    {
        return $this->uninterpreted_option;
    }

    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @param array<\Google\Protobuf\Internal\UninterpretedOption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUninterpretedOption($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\UninterpretedOption::class);
        $this->uninterpreted_option = $arr;

        return $this;
    }

}

