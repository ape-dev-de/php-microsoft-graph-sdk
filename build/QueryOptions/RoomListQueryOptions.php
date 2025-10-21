<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoomList resources
 *
 * Available select fields:
 * - emailAddress
 * - rooms
 */
class RoomListQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoomList
     */
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_ROOMS = 'rooms';

    /**
     * Select specific RoomList properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
