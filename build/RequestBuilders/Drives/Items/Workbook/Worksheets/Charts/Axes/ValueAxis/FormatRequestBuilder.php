<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes\ValueAxis;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartAxisFormat;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes\ValueAxis\Format\FontRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes\ValueAxis\Format\LineRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/charts/{workbookChart-id}/axes/valueAxis/format
 */
class FormatRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get format from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookChartAxisFormat|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookChartAxisFormat|null
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
     * Deserialize response to WorkbookChartAxisFormat|null
     */
    private function deserializeGet(string $body): WorkbookChartAxisFormat|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookChartAxisFormat($data);
    }
    /**
     * Update the navigation property format in drives
     * @param WorkbookChartAxisFormat $body Request body
     * @return WorkbookChartAxisFormat|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookChartAxisFormat $body): WorkbookChartAxisFormat|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookChartAxisFormat|null
     */
    private function deserializePatch(string $body): WorkbookChartAxisFormat|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookChartAxisFormat($data);
    }
    /**
     * Delete navigation property format for drives
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
     * Navigate to font
     *
     * @return FontRequestBuilder
     */
    public function font(): FontRequestBuilder
    {
        return new FontRequestBuilder($this->client, $this->requestUrl . '/font');
    }
    /**
     * Navigate to line
     *
     * @return LineRequestBuilder
     */
    public function line(): LineRequestBuilder
    {
        return new LineRequestBuilder($this->client, $this->requestUrl . '/line');
    }
}
