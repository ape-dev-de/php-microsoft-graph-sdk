<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssuePost
 */
class ServiceHealthIssuePost
{
    public function __construct(
        /** The published time of the post. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The content of the service issue post. The supported value for the contentType property is html. */
        public ?ItemBody $description = null,
        /** The post type of the service issue historical post. Possible values are: regular, quick, strategic, unknownFutureValue. */
        public ?PostType $postType = null
    ) {}
}
