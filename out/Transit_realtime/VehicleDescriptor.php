<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto

namespace Transit_realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identification information for the vehicle performing the trip.
 *
 * Generated from protobuf message <code>transit_realtime.VehicleDescriptor</code>
 */
class VehicleDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * Internal system identification of the vehicle. Should be unique per
     * vehicle, and can be used for tracking the vehicle as it proceeds through
     * the system.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * User visible label, i.e., something that must be shown to the passenger to
     * help identify the correct vehicle.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * The license plate of the vehicle.
     *
     * Generated from protobuf field <code>string license_plate = 3;</code>
     */
    protected $license_plate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Internal system identification of the vehicle. Should be unique per
     *           vehicle, and can be used for tracking the vehicle as it proceeds through
     *           the system.
     *     @type string $label
     *           User visible label, i.e., something that must be shown to the passenger to
     *           help identify the correct vehicle.
     *     @type string $license_plate
     *           The license plate of the vehicle.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Internal system identification of the vehicle. Should be unique per
     * vehicle, and can be used for tracking the vehicle as it proceeds through
     * the system.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Internal system identification of the vehicle. Should be unique per
     * vehicle, and can be used for tracking the vehicle as it proceeds through
     * the system.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * User visible label, i.e., something that must be shown to the passenger to
     * help identify the correct vehicle.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * User visible label, i.e., something that must be shown to the passenger to
     * help identify the correct vehicle.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * The license plate of the vehicle.
     *
     * Generated from protobuf field <code>string license_plate = 3;</code>
     * @return string
     */
    public function getLicensePlate()
    {
        return $this->license_plate;
    }

    /**
     * The license plate of the vehicle.
     *
     * Generated from protobuf field <code>string license_plate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLicensePlate($var)
    {
        GPBUtil::checkString($var, True);
        $this->license_plate = $var;

        return $this;
    }

}

