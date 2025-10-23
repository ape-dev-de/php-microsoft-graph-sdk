<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationItemBody
 */
class EducationItemBody
{
    /**  */
    public ?string $content = null;

    /** 
     * 
     * @var BodyType|\stdClass|null
     */
    public mixed $contentType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
    }
}
