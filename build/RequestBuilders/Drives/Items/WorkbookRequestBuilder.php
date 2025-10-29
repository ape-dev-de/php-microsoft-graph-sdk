<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Workbook;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\ApplicationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\CommentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\FunctionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\CloseSessionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\CreateSessionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\RefreshSessionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\SessionInfoResourceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\TableRowOperationResultRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\NamesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\TablesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\WorksheetsRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook
 */
class WorkbookRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get workbook from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Workbook
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Workbook
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Workbook
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Workbook($data);
    }
    /**
     * Update the navigation property workbook in drives
     * @param Workbook $body Request body
     * @return Workbook
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Workbook $body): Workbook
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Workbook
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Workbook($data);
    }
    /**
     * Delete navigation property workbook for drives
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to application
     *
     * @return ApplicationRequestBuilder
     */
    public function application(): ApplicationRequestBuilder
    {
        return new ApplicationRequestBuilder($this->client, $this->requestUrl . '/application');
    }
    /**
     * Navigate to comments
     *
     * @return CommentsRequestBuilder
     */
    public function comments(): CommentsRequestBuilder
    {
        return new CommentsRequestBuilder($this->client, $this->requestUrl . '/comments');
    }
    /**
     * Navigate to functions
     *
     * @return FunctionsRequestBuilder
     */
    public function functions(): FunctionsRequestBuilder
    {
        return new FunctionsRequestBuilder($this->client, $this->requestUrl . '/functions');
    }
    /**
     * Navigate to closeSession
     *
     * @return CloseSessionRequestBuilder
     */
    public function closeSession(): CloseSessionRequestBuilder
    {
        return new CloseSessionRequestBuilder($this->client, $this->requestUrl . '/closeSession');
    }
    /**
     * Navigate to createSession
     *
     * @return CreateSessionRequestBuilder
     */
    public function createSession(): CreateSessionRequestBuilder
    {
        return new CreateSessionRequestBuilder($this->client, $this->requestUrl . '/createSession');
    }
    /**
     * Navigate to refreshSession
     *
     * @return RefreshSessionRequestBuilder
     */
    public function refreshSession(): RefreshSessionRequestBuilder
    {
        return new RefreshSessionRequestBuilder($this->client, $this->requestUrl . '/refreshSession');
    }
    /**
     * Navigate to names
     *
     * @return NamesRequestBuilder
     */
    public function names(): NamesRequestBuilder
    {
        return new NamesRequestBuilder($this->client, $this->requestUrl . '/names');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to tables
     *
     * @return TablesRequestBuilder
     */
    public function tables(): TablesRequestBuilder
    {
        return new TablesRequestBuilder($this->client, $this->requestUrl . '/tables');
    }
    /**
     * Navigate to worksheets
     *
     * @return WorksheetsRequestBuilder
     */
    public function worksheets(): WorksheetsRequestBuilder
    {
        return new WorksheetsRequestBuilder($this->client, $this->requestUrl . '/worksheets');
    }
}
