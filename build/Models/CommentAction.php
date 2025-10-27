<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommentAction
 */
class CommentAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If true, this activity was a reply to an existing comment thread. */
    public ?bool $isReply = null;

    /** 
     * The identity of the user who started the comment thread.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $parentAuthor = null;

    /** 
     * The identities of the users participating in this comment thread.
     * @var IdentitySet[]
     */
    public array $participants = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isReply'])) {
            $this->isReply = $data['isReply'];
        }
        if (isset($data['parentAuthor'])) {
            $this->parentAuthor = is_array($data['parentAuthor']) ? new IdentitySet($data['parentAuthor']) : $data['parentAuthor'];
        }
        if (isset($data['participants'])) {
            $this->participants = $data['participants'];
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
