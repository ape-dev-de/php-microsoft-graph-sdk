<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssuePost
 */
class ServiceHealthIssuePost
{
    /** The published time of the post. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * The content of the service issue post. The supported value for the contentType property is html.
     * @var ItemBody|\stdClass|null
     */
    public mixed $description = null;

    /** 
     * The post type of the service issue historical post. Possible values are: regular, quick, strategic, unknownFutureValue.
     * @var PostType|\stdClass|null
     */
    public mixed $postType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['postType'])) {
            $this->postType = $data['postType'];
        }
    }
}
