<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationClass;

/**
 * Request builder for individual EducationClass item
 */
class EducationClassItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get EducationClass item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return EducationClass
     */
    public function get(?array $queryParameters = null): EducationClass
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, EducationClass::class);
    }

    /**
     * Update EducationClass item
     *
     * @param EducationClass $item The item with updated properties
     * @return EducationClass
     */
    public function patch(EducationClass $item): EducationClass
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, EducationClass::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
