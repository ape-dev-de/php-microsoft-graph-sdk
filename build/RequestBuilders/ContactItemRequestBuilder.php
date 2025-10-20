<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Contact;

/**
 * Request builder for individual Contact item
 */
class ContactItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Contact item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Contact
     */
    public function get(?array $queryParameters = null): Contact
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Contact::class);
    }

}
