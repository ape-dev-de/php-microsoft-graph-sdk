<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AudioConferencing resources
 *
 * Available select fields:
 * - conferenceId
 * - dialinUrl
 * - tollFreeNumber
 * - tollFreeNumbers
 * - tollNumber
 * - tollNumbers
 */
class AudioConferencingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AudioConferencing
     */
    public const FIELD_CONFERENCE_ID = 'conferenceId';
    public const FIELD_DIALIN_URL = 'dialinUrl';
    public const FIELD_TOLL_FREE_NUMBER = 'tollFreeNumber';
    public const FIELD_TOLL_FREE_NUMBERS = 'tollFreeNumbers';
    public const FIELD_TOLL_NUMBER = 'tollNumber';
    public const FIELD_TOLL_NUMBERS = 'tollNumbers';

    /**
     * Select specific AudioConferencing properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
