<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Bundle
 */
class Bundle
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * If the bundle is an album, then the album property is included
     * @var Album|\stdClass|null
     */
    public Album|\stdClass|null $album = null;

    /** Number of children contained immediately within this container. */
    public ?float $childCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['album'])) {
            $this->album = is_array($data['album']) ? new Album($data['album']) : $data['album'];
        }
        if (isset($data['childCount'])) {
            $this->childCount = $data['childCount'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
