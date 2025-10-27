<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssuePost
 */
class ServiceHealthIssuePost
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The published time of the post. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * The content of the service issue post. The supported value for the contentType property is html.
     * @var ItemBody|\stdClass|null
     */
    public ItemBody|\stdClass|null $description = null;

    /** 
     * The post type of the service issue historical post. Possible values are: regular, quick, strategic, unknownFutureValue.
     * @var PostType|\stdClass|null
     */
    public PostType|\stdClass|null $postType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = is_array($data['description']) ? new ItemBody($data['description']) : $data['description'];
        }
        if (isset($data['postType'])) {
            $this->postType = is_array($data['postType']) ? new PostType($data['postType']) : $data['postType'];
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
