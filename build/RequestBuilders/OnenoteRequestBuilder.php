<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Onenote;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OnenoteQueryOptions;

/**
 * Request builder for Onenote
 */
class OnenoteRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param OnenoteQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Onenote
     */
    public function get(?OnenoteQueryOptions $options = null, ?array $queryParameters = null): Onenote
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Onenote::class);
    }

    /**
     * Create a new Onenote
     *
     * @param Onenote $item The item to create
     * @return Onenote
     */
    public function post(Onenote $item): Onenote
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Onenote::class);
    }
    /**
     * Get notebooks request builder
     *
     * @return NotebooksRequestBuilder
     */
    public function notebooks(): NotebooksRequestBuilder
    {
        return new NotebooksRequestBuilder($this->client, $this->buildPath('notebooks'));
    }

    /**
     * Get operations request builder
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->buildPath('operations'));
    }

    /**
     * Get pages request builder
     *
     * @return PagesRequestBuilder
     */
    public function pages(): PagesRequestBuilder
    {
        return new PagesRequestBuilder($this->client, $this->buildPath('pages'));
    }

    /**
     * Get resources request builder
     *
     * @return ResourcesRequestBuilder
     */
    public function resources(): ResourcesRequestBuilder
    {
        return new ResourcesRequestBuilder($this->client, $this->buildPath('resources'));
    }

    /**
     * Get sectionGroups request builder
     *
     * @return SectionGroupsRequestBuilder
     */
    public function sectionGroups(): SectionGroupsRequestBuilder
    {
        return new SectionGroupsRequestBuilder($this->client, $this->buildPath('sectionGroups'));
    }

    /**
     * Get sections request builder
     *
     * @return SectionsRequestBuilder
     */
    public function sections(): SectionsRequestBuilder
    {
        return new SectionsRequestBuilder($this->client, $this->buildPath('sections'));
    }

}
