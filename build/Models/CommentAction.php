<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommentAction
 */
class CommentAction
{
    public function __construct(
        /** If true, this activity was a reply to an existing comment thread. */
        public ?bool $isReply = null,
        /** The identity of the user who started the comment thread. */
        public ?string $parentAuthor = null,
        /** The identities of the users participating in this comment thread. */
        public array $participants = []
    ) {}
}
