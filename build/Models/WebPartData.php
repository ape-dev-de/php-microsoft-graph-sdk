<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebPartData
 */
class WebPartData
{
    /** Data version of the web part. The value is defined by the web part developer. Different dataVersions usually refers to a different property structure. */
    public ?string $dataVersion = null;

    /** Description of the web part. */
    public ?string $description = null;

    /** Properties bag of the web part. */
    public ?string $properties = null;

    /** 
     * Contains collections of data that can be processed by server side services like search index and link fixup.
     * @var ServerProcessedContent|\stdClass|null
     */
    public mixed $serverProcessedContent = null;

    /** Title of the web part. */
    public ?string $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['dataVersion'])) {
            $this->dataVersion = $data['dataVersion'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['properties'])) {
            $this->properties = $data['properties'];
        }
        if (isset($data['serverProcessedContent'])) {
            $this->serverProcessedContent = $data['serverProcessedContent'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
    }
}
