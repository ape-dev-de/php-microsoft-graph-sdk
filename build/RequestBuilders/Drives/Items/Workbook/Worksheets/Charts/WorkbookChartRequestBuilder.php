<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChart;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\AxesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\DataLabelsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\FormatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\LegendRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\ImageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\SetDataRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\SetPositionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\SeriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\TitleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Charts\WorksheetRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/charts/{workbookChart-id}
 */
class WorkbookChartRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get charts from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookChart|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookChart|null
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
     * Deserialize response to WorkbookChart|null
     */
    private function deserializeGet(string $body): WorkbookChart|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookChart($data);
    }
    /**
     * Update the navigation property charts in drives
     * @param WorkbookChart $body Request body
     * @return WorkbookChart|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookChart $body): WorkbookChart|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookChart|null
     */
    private function deserializePatch(string $body): WorkbookChart|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookChart($data);
    }
    /**
     * Delete navigation property charts for drives
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
     * Navigate to axes
     *
     * @return AxesRequestBuilder
     */
    public function axes(): AxesRequestBuilder
    {
        return new AxesRequestBuilder($this->client, $this->requestUrl . '/axes');
    }
    /**
     * Navigate to dataLabels
     *
     * @return DataLabelsRequestBuilder
     */
    public function dataLabels(): DataLabelsRequestBuilder
    {
        return new DataLabelsRequestBuilder($this->client, $this->requestUrl . '/dataLabels');
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
     * Navigate to legend
     *
     * @return LegendRequestBuilder
     */
    public function legend(): LegendRequestBuilder
    {
        return new LegendRequestBuilder($this->client, $this->requestUrl . '/legend');
    }
    /**
     * Navigate to image()
     *
     * @return ImageRequestBuilder
     */
    public function image(): ImageRequestBuilder
    {
        return new ImageRequestBuilder($this->client, $this->requestUrl . '/image()');
    }
    /**
     * Navigate to setData
     *
     * @return SetDataRequestBuilder
     */
    public function setData(): SetDataRequestBuilder
    {
        return new SetDataRequestBuilder($this->client, $this->requestUrl . '/setData');
    }
    /**
     * Navigate to setPosition
     *
     * @return SetPositionRequestBuilder
     */
    public function setPosition(): SetPositionRequestBuilder
    {
        return new SetPositionRequestBuilder($this->client, $this->requestUrl . '/setPosition');
    }
    /**
     * Navigate to series
     *
     * @return SeriesRequestBuilder
     */
    public function series(): SeriesRequestBuilder
    {
        return new SeriesRequestBuilder($this->client, $this->requestUrl . '/series');
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
    /**
     * Navigate to worksheet
     *
     * @return WorksheetRequestBuilder
     */
    public function worksheet(): WorksheetRequestBuilder
    {
        return new WorksheetRequestBuilder($this->client, $this->requestUrl . '/worksheet');
    }
}
