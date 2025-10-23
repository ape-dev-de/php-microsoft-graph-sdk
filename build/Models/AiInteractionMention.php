<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMention
 */
class AiInteractionMention
{
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
        if (isset($data['mentioned'])) {
            $this->mentioned = $data['mentioned'];
        }
        if (isset($data['mentionId'])) {
            $this->mentionId = $data['mentionId'];
        }
        if (isset($data['mentionText'])) {
            $this->mentionText = $data['mentionText'];
        }
    }
}
