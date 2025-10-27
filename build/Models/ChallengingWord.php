<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChallengingWord
 */
class ChallengingWord
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Number of times the word was found challenging by the student during the reading session. */
    public ?float $count = null;

    /** The specific word that the student found challenging during the reading session. */
    public ?string $word = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['count'])) {
            $this->count = $data['count'];
        }
        if (isset($data['word'])) {
            $this->word = $data['word'];
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
