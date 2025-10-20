<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Room resources
 *
 * Available select fields:
 * - audioDeviceName
 * - bookingType
 * - building
 * - capacity
 * - displayDeviceName
 * - emailAddress
 * - floorLabel
 * - floorNumber
 * - isWheelChairAccessible
 * - label
 * - nickname
 * - tags
 * - videoDeviceName
 */
class RoomQueryOptions extends QueryOptions
{
    public const FIELD_AUDIO_DEVICE_NAME = 'audioDeviceName';
    public const FIELD_BOOKING_TYPE = 'bookingType';
    public const FIELD_BUILDING = 'building';
    public const FIELD_CAPACITY = 'capacity';
    public const FIELD_DISPLAY_DEVICE_NAME = 'displayDeviceName';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_FLOOR_LABEL = 'floorLabel';
    public const FIELD_FLOOR_NUMBER = 'floorNumber';
    public const FIELD_IS_WHEEL_CHAIR_ACCESSIBLE = 'isWheelChairAccessible';
    public const FIELD_LABEL = 'label';
    public const FIELD_NICKNAME = 'nickname';
    public const FIELD_TAGS = 'tags';
    public const FIELD_VIDEO_DEVICE_NAME = 'videoDeviceName';

    /**
     * Select specific Room properties
     * 
     * @param array<string> $select Use RoomQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
