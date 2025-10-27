<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMention
 */
class AiInteractionMention
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var AiInteractionMentionedIdentitySet|\stdClass|null
     */
    public mixed $mentioned = null;

    /**  */
    public ?float $mentionId = null;

    /**  */
    public ?string $mentionText = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['mentioned'])) {
            $this->mentioned = is_array($data['mentioned']) ? new AiInteractionMentionedIdentitySet($data['mentioned']) : $data['mentioned'];
        }
        if (isset($data['mentionId'])) {
            $this->mentionId = $data['mentionId'];
        }
        if (isset($data['mentionText'])) {
            $this->mentionText = $data['mentionText'];
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
