<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartAxis;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes\CategoryAxis\FormatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes\CategoryAxis\MajorGridlinesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes\CategoryAxis\MinorGridlinesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\Axes\CategoryAxis\TitleRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/charts/{workbookChart-id}/axes/categoryAxis
 */
class CategoryAxisRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get categoryAxis from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookChartAxis|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookChartAxis|null
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
     * Deserialize response to WorkbookChartAxis|null
     */
    private function deserializeGet(string $body): WorkbookChartAxis|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookChartAxis($data);
    }
    /**
     * Update the navigation property categoryAxis in drives
     * @param WorkbookChartAxis $body Request body
     * @return WorkbookChartAxis|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookChartAxis $body): WorkbookChartAxis|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookChartAxis|null
     */
    private function deserializePatch(string $body): WorkbookChartAxis|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookChartAxis($data);
    }
    /**
     * Delete navigation property categoryAxis for drives
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
     * Navigate to format
     *
     * @return FormatRequestBuilder
     */
    public function format(): FormatRequestBuilder
    {
        return new FormatRequestBuilder($this->client, $this->requestUrl . '/format');
    }
    /**
     * Navigate to majorGridlines
     *
     * @return MajorGridlinesRequestBuilder
     */
    public function majorGridlines(): MajorGridlinesRequestBuilder
    {
        return new MajorGridlinesRequestBuilder($this->client, $this->requestUrl . '/majorGridlines');
    }
    /**
     * Navigate to minorGridlines
     *
     * @return MinorGridlinesRequestBuilder
     */
    public function minorGridlines(): MinorGridlinesRequestBuilder
    {
        return new MinorGridlinesRequestBuilder($this->client, $this->requestUrl . '/minorGridlines');
    }
    /**
     * Navigate to title
     *
     * @return TitleRequestBuilder
     */
    public function title(): TitleRequestBuilder
    {
        return new TitleRequestBuilder($this->client, $this->requestUrl . '/title');
    }
}
