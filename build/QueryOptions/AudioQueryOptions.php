<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Audio resources
 *
 * Available select fields:
 * - album
 * - albumArtist
 * - artist
 * - bitrate
 * - composers
 * - copyright
 * - disc
 * - discCount
 * - duration
 * - genre
 * - hasDrm
 * - isVariableBitrate
 * - title
 * - track
 * - trackCount
 * - year
 */
class AudioQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Audio
     */
    public const FIELD_ALBUM = 'album';
    public const FIELD_ALBUM_ARTIST = 'albumArtist';
    public const FIELD_ARTIST = 'artist';
    public const FIELD_BITRATE = 'bitrate';
    public const FIELD_COMPOSERS = 'composers';
    public const FIELD_COPYRIGHT = 'copyright';
    public const FIELD_DISC = 'disc';
    public const FIELD_DISC_COUNT = 'discCount';
    public const FIELD_DURATION = 'duration';
    public const FIELD_GENRE = 'genre';
    public const FIELD_HAS_DRM = 'hasDrm';
    public const FIELD_IS_VARIABLE_BITRATE = 'isVariableBitrate';
    public const FIELD_TITLE = 'title';
    public const FIELD_TRACK = 'track';
    public const FIELD_TRACK_COUNT = 'trackCount';
    public const FIELD_YEAR = 'year';

    /**
     * Select specific Audio properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
