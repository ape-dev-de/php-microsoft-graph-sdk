<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Bundle
 */
class Bundle
{
    /** 
     * If the bundle is an album, then the album property is included
     * @var Album|\stdClass|null
     */
    public mixed $album = null;

    /** Number of children contained immediately within this container. */
    public ?float $childCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['album'])) {
            $this->album = $data['album'];
        }
        if (isset($data['childCount'])) {
            $this->childCount = $data['childCount'];
        }
    }
}
