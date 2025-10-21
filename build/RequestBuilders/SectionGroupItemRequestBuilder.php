<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SectionGroup;

/**
 * Request builder for individual SectionGroup item
 */
class SectionGroupItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SectionGroup item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SectionGroup
     */
    public function get(?array $queryParameters = null): SectionGroup
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SectionGroup::class);
    }

    /**
     * Update SectionGroup item
     *
     * @param SectionGroup $item The item with updated properties
     * @return SectionGroup
     */
    public function patch(SectionGroup $item): SectionGroup
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SectionGroup::class);
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
