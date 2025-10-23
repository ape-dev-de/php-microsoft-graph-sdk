<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Website
 */
class Website
{
    /** The URL of the website. */
    public ?string $address = null;

    /** The display name of the web site. */
    public ?string $displayName = null;

    /** 
     * The possible values are: other, home, work, blog, profile.
     * @var WebsiteType|\stdClass|null
     */
    public mixed $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new WebsiteType($data['type']) : $data['type'];
        }
    }
}
