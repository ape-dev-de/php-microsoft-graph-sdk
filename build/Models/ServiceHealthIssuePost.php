<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssuePost
 */
class ServiceHealthIssuePost
{
    /**
     * The published time of the post.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The content of the service issue post. The supported value for the contentType property is html.
     */
    private ?string $description;

    /**
     * The post type of the service issue historical post. Possible values are: regular, quick, strategic, unknownFutureValue.
     */
    private ?string $postType;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getPostType(): ?string
    {
        return $this->postType;
    }

    public function setPostType(?string $postType): self
    {
        $this->postType = $postType;
        return $this;
    }

}
