<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Workbook;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookQueryOptions;

/**
 * Request builder for Workbook
 */
class WorkbookRequestBuilder extends BaseRequestBuilder
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
     * @param WorkbookQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Workbook
     */
    public function get(?WorkbookQueryOptions $options = null, ?array $queryParameters = null): Workbook
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Workbook::class);
    }

    /**
     * Create a new Workbook
     *
     * @param Workbook $item The item to create
     * @return Workbook
     */
    public function post(Workbook $item): Workbook
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Workbook::class);
    }
    /**
     * Get application request builder
     *
     * @return ApplicationRequestBuilder
     */
    public function application(): ApplicationRequestBuilder
    {
        return new ApplicationRequestBuilder($this->client, $this->buildPath('application'));
    }

    /**
     * Get comments request builder
     *
     * @return CommentsRequestBuilder
     */
    public function comments(): CommentsRequestBuilder
    {
        return new CommentsRequestBuilder($this->client, $this->buildPath('comments'));
    }

    /**
     * Get closeSession request builder
     *
     * @return CloseSessionRequestBuilder
     */
    public function closeSession(): CloseSessionRequestBuilder
    {
        return new CloseSessionRequestBuilder($this->client, $this->buildPath('closeSession'));
    }

    /**
     * Get createSession request builder
     *
     * @return CreateSessionRequestBuilder
     */
    public function createSession(): CreateSessionRequestBuilder
    {
        return new CreateSessionRequestBuilder($this->client, $this->buildPath('createSession'));
    }

    /**
     * Get refreshSession request builder
     *
     * @return RefreshSessionRequestBuilder
     */
    public function refreshSession(): RefreshSessionRequestBuilder
    {
        return new RefreshSessionRequestBuilder($this->client, $this->buildPath('refreshSession'));
    }

    /**
     * Get names request builder
     *
     * @return NamesRequestBuilder
     */
    public function names(): NamesRequestBuilder
    {
        return new NamesRequestBuilder($this->client, $this->buildPath('names'));
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
     * Get tables request builder
     *
     * @return TablesRequestBuilder
     */
    public function tables(): TablesRequestBuilder
    {
        return new TablesRequestBuilder($this->client, $this->buildPath('tables'));
    }

    /**
     * Get worksheets request builder
     *
     * @return WorksheetsRequestBuilder
     */
    public function worksheets(): WorksheetsRequestBuilder
    {
        return new WorksheetsRequestBuilder($this->client, $this->buildPath('worksheets'));
    }

}
