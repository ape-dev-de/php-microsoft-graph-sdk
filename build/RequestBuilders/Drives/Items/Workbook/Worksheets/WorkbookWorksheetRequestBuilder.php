<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheet;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\ChartsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\CellRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\RangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\UsedRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\NamesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\PivotTablesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\ProtectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\TablesRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}
 */
class WorkbookWorksheetRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get worksheets from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookWorksheet|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookWorksheet|null
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
     * Deserialize response to WorkbookWorksheet|null
     */
    private function deserializeGet(string $body): WorkbookWorksheet|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookWorksheet($data);
    }
    /**
     * Update the navigation property worksheets in drives
     * @param WorkbookWorksheet $body Request body
     * @return WorkbookWorksheet|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookWorksheet $body): WorkbookWorksheet|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookWorksheet|null
     */
    private function deserializePatch(string $body): WorkbookWorksheet|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookWorksheet($data);
    }
    /**
     * Delete navigation property worksheets for drives
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to charts
     *
     * @return ChartsRequestBuilder
     */
    public function charts(): ChartsRequestBuilder
    {
        return new ChartsRequestBuilder($this->client, $this->requestUrl . '/charts');
    }
    /**
     * Navigate to range()
     *
     * @return RangeRequestBuilder
     */
    public function range(): RangeRequestBuilder
    {
        return new RangeRequestBuilder($this->client, $this->requestUrl . '/range()');
    }
    /**
     * Navigate to usedRange()
     *
     * @return UsedRangeRequestBuilder
     */
    public function usedRange(): UsedRangeRequestBuilder
    {
        return new UsedRangeRequestBuilder($this->client, $this->requestUrl . '/usedRange()');
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
     * Navigate to pivotTables
     *
     * @return PivotTablesRequestBuilder
     */
    public function pivotTables(): PivotTablesRequestBuilder
    {
        return new PivotTablesRequestBuilder($this->client, $this->requestUrl . '/pivotTables');
    }
    /**
     * Navigate to protection
     *
     * @return ProtectionRequestBuilder
     */
    public function protection(): ProtectionRequestBuilder
    {
        return new ProtectionRequestBuilder($this->client, $this->requestUrl . '/protection');
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
}
