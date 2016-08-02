<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "layers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $layers = $booksService->layers;
 *  </code>
 */
class Google_LayersServiceResource extends Google_ServiceResource
{


    /**
     * List the layer summaries for a volume. (layers.list)
     *
     * @param string $volumeId The volume to retrieve layers for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param string contentVersion The content version for the requested volume.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Layersummaries
     */
    public function listLayers($volumeId, $optParams = array())
    {
        $params = array('volumeId' => $volumeId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Layersummaries($data);
        } else {
            return $data;
        }
    }

    /**
     * Gets the layer summary for a volume. (layers.get)
     *
     * @param string $volumeId The volume to retrieve layers for.
     * @param string $summaryId The ID for the layer to get the summary for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string contentVersion The content version for the requested volume.
     * @return Google_Layersummary
     */
    public function get($volumeId, $summaryId, $optParams = array())
    {
        $params = array('volumeId' => $volumeId, 'summaryId' => $summaryId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Layersummary($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "annotationData" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $annotationData = $booksService->annotationData;
 *  </code>
 */
class Google_LayersAnnotationDataServiceResource extends Google_ServiceResource
{


    /**
     * Gets the annotation data for a volume and layer. (annotationData.list)
     *
     * @param string $volumeId The volume to retrieve annotation data for.
     * @param string $layerId The ID for the layer to get the annotation data.
     * @param string $contentVersion The content version for the requested volume.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int scale The requested scale for the image.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param int h The requested pixel height for any images. If height is provided width must also be provided.
     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string annotationDataId The list of Annotation Data Ids to retrieve. Pagination is ignored if this is set.
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param int w The requested pixel width for any images. If width is provided height must also be provided.
     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
     * @return Google_Annotationsdata
     */
    public function listLayersAnnotationData($volumeId, $layerId, $contentVersion, $optParams = array())
    {
        $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'contentVersion' => $contentVersion);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Annotationsdata($data);
        } else {
            return $data;
        }
    }

    /**
     * Gets the annotation data. (annotationData.get)
     *
     * @param string $volumeId The volume to retrieve annotations for.
     * @param string $layerId The ID for the layer to get the annotations.
     * @param string $annotationDataId The ID of the annotation data to retrieve.
     * @param string $contentVersion The content version for the volume you are trying to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int scale The requested scale for the image.
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param int h The requested pixel height for any images. If height is provided width must also be provided.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param int w The requested pixel width for any images. If width is provided height must also be provided.
     * @return Google_Annotationdata
     */
    public function get($volumeId, $layerId, $annotationDataId, $contentVersion, $optParams = array())
    {
        $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'annotationDataId' => $annotationDataId, 'contentVersion' => $contentVersion);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Annotationdata($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "volumeAnnotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumeAnnotations = $booksService->volumeAnnotations;
 *  </code>
 */
class Google_LayersVolumeAnnotationsServiceResource extends Google_ServiceResource
{


    /**
     * Gets the volume annotations for a volume and layer. (volumeAnnotations.list)
     *
     * @param string $volumeId The volume to retrieve annotations for.
     * @param string $layerId The ID for the layer to get the annotations.
     * @param string $contentVersion The content version for the requested volume.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool showDeleted Set to true to return deleted annotations. updatedMin must be in the request to use this. Defaults to false.
     * @opt_param string endPosition The end position to end retrieving data from.
     * @opt_param string endOffset The end offset to end retrieving data from.
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startOffset The start offset to start retrieving data from.
     * @opt_param string startPosition The start position to start retrieving data from.
     * @return Google_Volumeannotations
     */
    public function listLayersVolumeAnnotations($volumeId, $layerId, $contentVersion, $optParams = array())
    {
        $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'contentVersion' => $contentVersion);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Volumeannotations($data);
        } else {
            return $data;
        }
    }

    /**
     * Gets the volume annotation. (volumeAnnotations.get)
     *
     * @param string $volumeId The volume to retrieve annotations for.
     * @param string $layerId The ID for the layer to get the annotations.
     * @param string $annotationId The ID of the volume annotation to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Volumeannotation
     */
    public function get($volumeId, $layerId, $annotationId, $optParams = array())
    {
        $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'annotationId' => $annotationId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Volumeannotation($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class Google_BookshelvesServiceResource extends Google_ServiceResource
{


    /**
     * Retrieves a list of public bookshelves for the specified user. (bookshelves.list)
     *
     * @param string $userId ID of user for whom to retrieve bookshelves.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Bookshelves
     */
    public function listBookshelves($userId, $optParams = array())
    {
        $params = array('userId' => $userId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Bookshelves($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves metadata for a specific bookshelf for the specified user. (bookshelves.get)
     *
     * @param string $userId ID of user for whom to retrieve bookshelves.
     * @param string $shelf ID of bookshelf to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Bookshelf
     */
    public function get($userId, $shelf, $optParams = array())
    {
        $params = array('userId' => $userId, 'shelf' => $shelf);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Bookshelf($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class Google_BookshelvesVolumesServiceResource extends Google_ServiceResource
{


    /**
     * Retrieves volumes in a specific bookshelf for the specified user. (volumes.list)
     *
     * @param string $userId ID of user for whom to retrieve bookshelf volumes.
     * @param string $shelf ID of bookshelf to retrieve volumes.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first element to return (starts at 0)
     * @return Google_Volumes
     */
    public function listBookshelvesVolumes($userId, $shelf, $optParams = array())
    {
        $params = array('userId' => $userId, 'shelf' => $shelf);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "myconfig" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $myconfig = $booksService->myconfig;
 *  </code>
 */
class Google_MyconfigServiceResource extends Google_ServiceResource
{


    /**
     * Release downloaded content access restriction. (myconfig.releaseDownloadAccess)
     *
     * @param string $volumeIds The volume(s) to release restrictions for.
     * @param string $cpksver The device/version ID from which to release the restriction.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @opt_param string source String to identify the originator of this request.
     * @return Google_DownloadAccesses
     */
    public function releaseDownloadAccess($volumeIds, $cpksver, $optParams = array())
    {
        $params = array('volumeIds' => $volumeIds, 'cpksver' => $cpksver);
        $params = array_merge($params, $optParams);
        $data = $this->__call('releaseDownloadAccess', array($params));
        if ($this->useObjects()) {
            return new Google_DownloadAccesses($data);
        } else {
            return $data;
        }
    }

    /**
     * Request concurrent and download access restrictions. (myconfig.requestAccess)
     *
     * @param string $source String to identify the originator of this request.
     * @param string $volumeId The volume to request concurrent/download restrictions for.
     * @param string $nonce The client nonce value.
     * @param string $cpksver The device/version ID from which to request the restrictions.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @return Google_RequestAccess
     */
    public function requestAccess($source, $volumeId, $nonce, $cpksver, $optParams = array())
    {
        $params = array('source' => $source, 'volumeId' => $volumeId, 'nonce' => $nonce, 'cpksver' => $cpksver);
        $params = array_merge($params, $optParams);
        $data = $this->__call('requestAccess', array($params));
        if ($this->useObjects()) {
            return new Google_RequestAccess($data);
        } else {
            return $data;
        }
    }

    /**
     * Request downloaded content access for specified volumes on the My eBooks shelf.
     * (myconfig.syncVolumeLicenses)
     *
     * @param string $source String to identify the originator of this request.
     * @param string $nonce The client nonce value.
     * @param string $cpksver The device/version ID from which to release the restriction.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
     * @opt_param string volumeIds The volume(s) to request download restrictions for.
     * @return Google_Volumes
     */
    public function syncVolumeLicenses($source, $nonce, $cpksver, $optParams = array())
    {
        $params = array('source' => $source, 'nonce' => $nonce, 'cpksver' => $cpksver);
        $params = array_merge($params, $optParams);
        $data = $this->__call('syncVolumeLicenses', array($params));
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class Google_VolumesServiceResource extends Google_ServiceResource
{


    /**
     * Performs a book search. (volumes.list)
     *
     * @param string $q Full-text search query string.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy Sort search results.
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string libraryRestrict Restrict search to this user's library.
     * @opt_param string langRestrict Restrict results to books with this language code.
     * @opt_param bool showPreorders Set to true to show books available for preorder. Defaults to false.
     * @opt_param string printType Restrict to books or magazines.
     * @opt_param string maxResults Maximum number of results to return.
     * @opt_param string filter Filter search results.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first result to return (starts at 0)
     * @opt_param string download Restrict to volumes by download availability.
     * @opt_param string partner Restrict and brand results for partner ID.
     * @return Google_Volumes
     */
    public function listVolumes($q, $optParams = array())
    {
        $params = array('q' => $q);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }

    /**
     * Gets volume information for a single volume. (volumes.get)
     *
     * @param string $volumeId ID of volume to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string partner Brand results for partner ID.
     * @return Google_Volume
     */
    public function get($volumeId, $optParams = array())
    {
        $params = array('volumeId' => $volumeId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Volume($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "associated" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $associated = $booksService->associated;
 *  </code>
 */
class Google_VolumesAssociatedServiceResource extends Google_ServiceResource
{


    /**
     * Return a list of associated books. (associated.list)
     *
     * @param string $volumeId ID of the source volume.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string maxResults Maximum number of results to return.
     * @opt_param string filter Filter search results.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first result to return (starts at 0)
     * @opt_param string association Association type.
     * @return Google_Volumes
     */
    public function listVolumesAssociated($volumeId, $optParams = array())
    {
        $params = array('volumeId' => $volumeId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "mylibrary" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $mylibrary = $booksService->mylibrary;
 *  </code>
 */
class Google_MylibraryServiceResource extends Google_ServiceResource
{


}

/**
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class Google_MylibraryBookshelvesServiceResource extends Google_ServiceResource
{


    /**
     * Removes a volume from a bookshelf. (bookshelves.removeVolume)
     *
     * @param string $shelf ID of bookshelf from which to remove a volume.
     * @param string $volumeId ID of volume to remove.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     */
    public function removeVolume($shelf, $volumeId, $optParams = array())
    {
        $params = array('shelf' => $shelf, 'volumeId' => $volumeId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('removeVolume', array($params));
        return $data;
    }

    /**
     * Retrieves metadata for a specific bookshelf belonging to the authenticated user.
     * (bookshelves.get)
     *
     * @param string $shelf ID of bookshelf to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Bookshelf
     */
    public function get($shelf, $optParams = array())
    {
        $params = array('shelf' => $shelf);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Bookshelf($data);
        } else {
            return $data;
        }
    }

    /**
     * Clears all volumes from a bookshelf. (bookshelves.clearVolumes)
     *
     * @param string $shelf ID of bookshelf from which to remove a volume.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     */
    public function clearVolumes($shelf, $optParams = array())
    {
        $params = array('shelf' => $shelf);
        $params = array_merge($params, $optParams);
        $data = $this->__call('clearVolumes', array($params));
        return $data;
    }

    /**
     * Retrieves a list of bookshelves belonging to the authenticated user. (bookshelves.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Bookshelves
     */
    public function listMylibraryBookshelves($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Bookshelves($data);
        } else {
            return $data;
        }
    }

    /**
     * Adds a volume to a bookshelf. (bookshelves.addVolume)
     *
     * @param string $shelf ID of bookshelf to which to add a volume.
     * @param string $volumeId ID of volume to add.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     */
    public function addVolume($shelf, $volumeId, $optParams = array())
    {
        $params = array('shelf' => $shelf, 'volumeId' => $volumeId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('addVolume', array($params));
        return $data;
    }

    /**
     * Moves a volume within a bookshelf. (bookshelves.moveVolume)
     *
     * @param string $shelf ID of bookshelf with the volume.
     * @param string $volumeId ID of volume to move.
     * @param int $volumePosition Position on shelf to move the item (0 puts the item before the current first item, 1 puts it between the first and the second and so on.)
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     */
    public function moveVolume($shelf, $volumeId, $volumePosition, $optParams = array())
    {
        $params = array('shelf' => $shelf, 'volumeId' => $volumeId, 'volumePosition' => $volumePosition);
        $params = array_merge($params, $optParams);
        $data = $this->__call('moveVolume', array($params));
        return $data;
    }
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class Google_MylibraryBookshelvesVolumesServiceResource extends Google_ServiceResource
{


    /**
     * Gets volume information for volumes on a bookshelf. (volumes.list)
     *
     * @param string $shelf The bookshelf ID or name retrieve volumes for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string q Full-text search query string in this bookshelf.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first element to return (starts at 0)
     * @return Google_Volumes
     */
    public function listMylibraryBookshelvesVolumes($shelf, $optParams = array())
    {
        $params = array('shelf' => $shelf);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "readingpositions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $readingpositions = $booksService->readingpositions;
 *  </code>
 */
class Google_MylibraryReadingpositionsServiceResource extends Google_ServiceResource
{


    /**
     * Sets my reading position information for a volume. (readingpositions.setPosition)
     *
     * @param string $volumeId ID of volume for which to update the reading position.
     * @param string $timestamp RFC 3339 UTC format timestamp associated with this reading position.
     * @param string $position Position string for the new volume reading position.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string contentVersion Volume content version for which this reading position applies.
     * @opt_param string action Action that caused this reading position to be set.
     */
    public function setPosition($volumeId, $timestamp, $position, $optParams = array())
    {
        $params = array('volumeId' => $volumeId, 'timestamp' => $timestamp, 'position' => $position);
        $params = array_merge($params, $optParams);
        $data = $this->__call('setPosition', array($params));
        return $data;
    }

    /**
     * Retrieves my reading position information for a volume. (readingpositions.get)
     *
     * @param string $volumeId ID of volume for which to retrieve a reading position.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string contentVersion Volume content version for which this reading position is requested.
     * @return Google_ReadingPosition
     */
    public function get($volumeId, $optParams = array())
    {
        $params = array('volumeId' => $volumeId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_ReadingPosition($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "annotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $annotations = $booksService->annotations;
 *  </code>
 */
class Google_MylibraryAnnotationsServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a new annotation. (annotations.insert)
     *
     * @param Google_Annotation $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Annotation
     */
    public function insert(Google_Annotation $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', array($params));
        if ($this->useObjects()) {
            return new Google_Annotation($data);
        } else {
            return $data;
        }
    }

    /**
     * Gets an annotation by its ID. (annotations.get)
     *
     * @param string $annotationId The ID for the annotation to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Annotation
     */
    public function get($annotationId, $optParams = array())
    {
        $params = array('annotationId' => $annotationId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Annotation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of annotations, possibly filtered. (annotations.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool showDeleted Set to true to return deleted annotations. updatedMin must be in the request to use this. Defaults to false.
     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
     * @opt_param string volumeId The volume to restrict annotations to.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param string pageIds The page ID(s) for the volume that is being queried.
     * @opt_param string contentVersion The content version for the requested volume.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string layerId The layer ID to limit annotation by.
     * @return Google_Annotations
     */
    public function listMylibraryAnnotations($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Annotations($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing annotation. (annotations.update)
     *
     * @param string $annotationId The ID for the annotation to update.
     * @param Google_Annotation $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     * @return Google_Annotation
     */
    public function update($annotationId, Google_Annotation $postBody, $optParams = array())
    {
        $params = array('annotationId' => $annotationId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', array($params));
        if ($this->useObjects()) {
            return new Google_Annotation($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes an annotation. (annotations.delete)
     *
     * @param string $annotationId The ID for the annotation to delete.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string source String to identify the originator of this request.
     */
    public function delete($annotationId, $optParams = array())
    {
        $params = array('annotationId' => $annotationId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', array($params));
        return $data;
    }
}

/**
 * Service definition for Google_Books (v1).
 *
 * <p>
 * Lets you search for books and manage your Google Books library.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://code.google.com/apis/books/docs/v1/getting_started.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_BooksService extends Google_Service
{
    public $layers;
    public $layers_annotationData;
    public $layers_volumeAnnotations;
    public $bookshelves;
    public $bookshelves_volumes;
    public $myconfig;
    public $volumes;
    public $volumes_associated;
    public $mylibrary_bookshelves;
    public $mylibrary_bookshelves_volumes;
    public $mylibrary_readingpositions;
    public $mylibrary_annotations;

    /**
     * Constructs the internal representation of the Books service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'books/v1/';
        $this->version = 'v1';
        $this->serviceName = 'books';

        $client->addService($this->serviceName, $this->version);
        $this->layers = new Google_LayersServiceResource($this, $this->serviceName, 'layers', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "contentVersion": {"type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "200", "format": "uint32"}, "source": {"type": "string", "location": "query"}}, "id": "books.layers.list", "httpMethod": "GET", "path": "volumes/{volumeId}/layersummary", "response": {"$ref": "Layersummaries"}}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"source": {"type": "string", "location": "query"}, "contentVersion": {"type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "summaryId": {"required": true, "type": "string", "location": "path"}}, "id": "books.layers.get", "httpMethod": "GET", "path": "volumes/{volumeId}/layersummary/{summaryId}", "response": {"$ref": "Layersummary"}}}}', true));
        $this->layers_annotationData = new Google_LayersAnnotationDataServiceResource($this, $this->serviceName, 'annotationData', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"scale": {"minimum": "0", "type": "integer", "location": "query", "format": "int32"}, "updatedMax": {"type": "string", "location": "query"}, "locale": {"type": "string", "location": "query"}, "h": {"type": "integer", "location": "query", "format": "int32"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "200", "format": "uint32"}, "annotationDataId": {"repeated": true, "type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "contentVersion": {"required": true, "type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "w": {"type": "integer", "location": "query", "format": "int32"}, "layerId": {"required": true, "type": "string", "location": "path"}, "updatedMin": {"type": "string", "location": "query"}}, "id": "books.layers.annotationData.list", "httpMethod": "GET", "path": "volumes/{volumeId}/layers/{layerId}/data", "response": {"$ref": "Annotationsdata"}}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"scale": {"minimum": "0", "type": "integer", "location": "query", "format": "int32"}, "locale": {"type": "string", "location": "query"}, "h": {"type": "integer", "location": "query", "format": "int32"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "annotationDataId": {"required": true, "type": "string", "location": "path"}, "source": {"type": "string", "location": "query"}, "contentVersion": {"required": true, "type": "string", "location": "query"}, "w": {"type": "integer", "location": "query", "format": "int32"}, "layerId": {"required": true, "type": "string", "location": "path"}}, "id": "books.layers.annotationData.get", "httpMethod": "GET", "path": "volumes/{volumeId}/layers/{layerId}/data/{annotationDataId}", "response": {"$ref": "Annotationdata"}}}}', true));
        $this->layers_volumeAnnotations = new Google_LayersVolumeAnnotationsServiceResource($this, $this->serviceName, 'volumeAnnotations', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"showDeleted": {"type": "boolean", "location": "query"}, "endPosition": {"type": "string", "location": "query"}, "endOffset": {"type": "string", "location": "query"}, "locale": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}, "updatedMax": {"type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "200", "format": "uint32"}, "pageToken": {"type": "string", "location": "query"}, "contentVersion": {"required": true, "type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "startOffset": {"type": "string", "location": "query"}, "layerId": {"required": true, "type": "string", "location": "path"}, "startPosition": {"type": "string", "location": "query"}}, "id": "books.layers.volumeAnnotations.list", "httpMethod": "GET", "path": "volumes/{volumeId}/layers/{layerId}", "response": {"$ref": "Volumeannotations"}}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"locale": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "annotationId": {"required": true, "type": "string", "location": "path"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "layerId": {"required": true, "type": "string", "location": "path"}}, "id": "books.layers.volumeAnnotations.get", "httpMethod": "GET", "path": "volumes/{volumeId}/layers/{layerId}/annotations/{annotationId}", "response": {"$ref": "Volumeannotation"}}}}', true));
        $this->bookshelves = new Google_BookshelvesServiceResource($this, $this->serviceName, 'bookshelves', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"source": {"type": "string", "location": "query"}, "userId": {"required": true, "type": "string", "location": "path"}}, "id": "books.bookshelves.list", "httpMethod": "GET", "path": "users/{userId}/bookshelves", "response": {"$ref": "Bookshelves"}}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"shelf": {"required": true, "type": "string", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}, "source": {"type": "string", "location": "query"}}, "id": "books.bookshelves.get", "httpMethod": "GET", "path": "users/{userId}/bookshelves/{shelf}", "response": {"$ref": "Bookshelf"}}}}', true));
        $this->bookshelves_volumes = new Google_BookshelvesVolumesServiceResource($this, $this->serviceName, 'volumes', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"shelf": {"required": true, "type": "string", "location": "path"}, "showPreorders": {"type": "boolean", "location": "query"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}, "source": {"type": "string", "location": "query"}, "startIndex": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}, "userId": {"required": true, "type": "string", "location": "path"}}, "id": "books.bookshelves.volumes.list", "httpMethod": "GET", "path": "users/{userId}/bookshelves/{shelf}/volumes", "response": {"$ref": "Volumes"}}}}', true));
        $this->myconfig = new Google_MyconfigServiceResource($this, $this->serviceName, 'myconfig', json_decode('{"methods": {"releaseDownloadAccess": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"locale": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "cpksver": {"required": true, "type": "string", "location": "query"}, "volumeIds": {"repeated": true, "required": true, "type": "string", "location": "query"}}, "id": "books.myconfig.releaseDownloadAccess", "httpMethod": "POST", "path": "myconfig/releaseDownloadAccess", "response": {"$ref": "DownloadAccesses"}}, "requestAccess": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"locale": {"type": "string", "location": "query"}, "nonce": {"required": true, "type": "string", "location": "query"}, "cpksver": {"required": true, "type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "query"}, "source": {"required": true, "type": "string", "location": "query"}}, "id": "books.myconfig.requestAccess", "httpMethod": "POST", "path": "myconfig/requestAccess", "response": {"$ref": "RequestAccess"}}, "syncVolumeLicenses": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"nonce": {"required": true, "type": "string", "location": "query"}, "locale": {"type": "string", "location": "query"}, "showPreorders": {"type": "boolean", "location": "query"}, "cpksver": {"required": true, "type": "string", "location": "query"}, "source": {"required": true, "type": "string", "location": "query"}, "volumeIds": {"repeated": true, "type": "string", "location": "query"}}, "id": "books.myconfig.syncVolumeLicenses", "httpMethod": "POST", "path": "myconfig/syncVolumeLicenses", "response": {"$ref": "Volumes"}}}}', true));
        $this->volumes = new Google_VolumesServiceResource($this, $this->serviceName, 'volumes', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"orderBy": {"enum": ["newest", "relevance"], "type": "string", "location": "query"}, "q": {"required": true, "type": "string", "location": "query"}, "projection": {"enum": ["full", "lite"], "type": "string", "location": "query"}, "libraryRestrict": {"enum": ["my-library", "no-restrict"], "type": "string", "location": "query"}, "langRestrict": {"type": "string", "location": "query"}, "showPreorders": {"type": "boolean", "location": "query"}, "printType": {"enum": ["all", "books", "magazines"], "type": "string", "location": "query"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "40", "format": "uint32"}, "filter": {"enum": ["ebooks", "free-ebooks", "full", "paid-ebooks", "partial"], "type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}, "download": {"enum": ["epub"], "type": "string", "location": "query"}, "partner": {"type": "string", "location": "query"}}, "id": "books.volumes.list", "httpMethod": "GET", "path": "volumes", "response": {"$ref": "Volumes"}}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"partner": {"type": "string", "location": "query"}, "country": {"type": "string", "location": "query"}, "projection": {"enum": ["full", "lite"], "type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "source": {"type": "string", "location": "query"}}, "id": "books.volumes.get", "httpMethod": "GET", "path": "volumes/{volumeId}", "response": {"$ref": "Volume"}}}}', true));
        $this->volumes_associated = new Google_VolumesAssociatedServiceResource($this, $this->serviceName, 'associated', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"projection": {"enum": ["full", "lite"], "type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "40", "format": "uint32"}, "filter": {"enum": ["ebooks", "free-ebooks", "full", "paid-ebooks", "partial"], "type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}, "association": {"enum": ["complementary"], "type": "string", "location": "query"}}, "id": "books.volumes.associated.list", "httpMethod": "GET", "path": "volumes/{volumeId}/associated", "response": {"$ref": "Volumes"}}}}', true));
        $this->mylibrary_bookshelves = new Google_MylibraryBookshelvesServiceResource($this, $this->serviceName, 'bookshelves', json_decode('{"methods": {"removeVolume": {"scopes": ["https://www.googleapis.com/auth/books"], "path": "mylibrary/bookshelves/{shelf}/removeVolume", "id": "books.mylibrary.bookshelves.removeVolume", "parameters": {"shelf": {"required": true, "type": "string", "location": "path"}, "volumeId": {"required": true, "type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}}, "httpMethod": "POST"}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"shelf": {"required": true, "type": "string", "location": "path"}, "source": {"type": "string", "location": "query"}}, "id": "books.mylibrary.bookshelves.get", "httpMethod": "GET", "path": "mylibrary/bookshelves/{shelf}", "response": {"$ref": "Bookshelf"}}, "clearVolumes": {"scopes": ["https://www.googleapis.com/auth/books"], "path": "mylibrary/bookshelves/{shelf}/clearVolumes", "id": "books.mylibrary.bookshelves.clearVolumes", "parameters": {"shelf": {"required": true, "type": "string", "location": "path"}, "source": {"type": "string", "location": "query"}}, "httpMethod": "POST"}, "list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"source": {"type": "string", "location": "query"}}, "response": {"$ref": "Bookshelves"}, "httpMethod": "GET", "path": "mylibrary/bookshelves", "id": "books.mylibrary.bookshelves.list"}, "addVolume": {"scopes": ["https://www.googleapis.com/auth/books"], "path": "mylibrary/bookshelves/{shelf}/addVolume", "id": "books.mylibrary.bookshelves.addVolume", "parameters": {"shelf": {"required": true, "type": "string", "location": "path"}, "volumeId": {"required": true, "type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}}, "httpMethod": "POST"}, "moveVolume": {"scopes": ["https://www.googleapis.com/auth/books"], "path": "mylibrary/bookshelves/{shelf}/moveVolume", "id": "books.mylibrary.bookshelves.moveVolume", "parameters": {"source": {"type": "string", "location": "query"}, "volumePosition": {"required": true, "type": "integer", "location": "query", "format": "int32"}, "volumeId": {"required": true, "type": "string", "location": "query"}, "shelf": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "POST"}}}', true));
        $this->mylibrary_bookshelves_volumes = new Google_MylibraryBookshelvesVolumesServiceResource($this, $this->serviceName, 'volumes', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"projection": {"enum": ["full", "lite"], "type": "string", "location": "query"}, "country": {"type": "string", "location": "query"}, "showPreorders": {"type": "boolean", "location": "query"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}, "shelf": {"required": true, "type": "string", "location": "path"}}, "id": "books.mylibrary.bookshelves.volumes.list", "httpMethod": "GET", "path": "mylibrary/bookshelves/{shelf}/volumes", "response": {"$ref": "Volumes"}}}}', true));
        $this->mylibrary_readingpositions = new Google_MylibraryReadingpositionsServiceResource($this, $this->serviceName, 'readingpositions', json_decode('{"methods": {"setPosition": {"scopes": ["https://www.googleapis.com/auth/books"], "path": "mylibrary/readingpositions/{volumeId}/setPosition", "id": "books.mylibrary.readingpositions.setPosition", "parameters": {"timestamp": {"required": true, "type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "path"}, "source": {"type": "string", "location": "query"}, "contentVersion": {"type": "string", "location": "query"}, "action": {"enum": ["bookmark", "chapter", "next-page", "prev-page", "scroll", "search"], "type": "string", "location": "query"}, "position": {"required": true, "type": "string", "location": "query"}}, "httpMethod": "POST"}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"source": {"type": "string", "location": "query"}, "contentVersion": {"type": "string", "location": "query"}, "volumeId": {"required": true, "type": "string", "location": "path"}}, "id": "books.mylibrary.readingpositions.get", "httpMethod": "GET", "path": "mylibrary/readingpositions/{volumeId}", "response": {"$ref": "ReadingPosition"}}}}', true));
        $this->mylibrary_annotations = new Google_MylibraryAnnotationsServiceResource($this, $this->serviceName, 'annotations', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"source": {"type": "string", "location": "query"}}, "request": {"$ref": "Annotation"}, "response": {"$ref": "Annotation"}, "httpMethod": "POST", "path": "mylibrary/annotations", "id": "books.mylibrary.annotations.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"source": {"type": "string", "location": "query"}, "annotationId": {"required": true, "type": "string", "location": "path"}}, "id": "books.mylibrary.annotations.get", "httpMethod": "GET", "path": "mylibrary/annotations/{annotationId}", "response": {"$ref": "Annotation"}}, "list": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"showDeleted": {"type": "boolean", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}, "updatedMax": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "location": "query"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "40", "format": "uint32"}, "pageToken": {"type": "string", "location": "query"}, "pageIds": {"repeated": true, "type": "string", "location": "query"}, "contentVersion": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "layerId": {"type": "string", "location": "query"}}, "response": {"$ref": "Annotations"}, "httpMethod": "GET", "path": "mylibrary/annotations", "id": "books.mylibrary.annotations.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/books"], "parameters": {"source": {"type": "string", "location": "query"}, "annotationId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Annotation"}, "response": {"$ref": "Annotation"}, "httpMethod": "PUT", "path": "mylibrary/annotations/{annotationId}", "id": "books.mylibrary.annotations.update"}, "delete": {"scopes": ["https://www.googleapis.com/auth/books"], "path": "mylibrary/annotations/{annotationId}", "id": "books.mylibrary.annotations.delete", "parameters": {"source": {"type": "string", "location": "query"}, "annotationId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));

    }
}

class Google_Annotation extends Google_Model
{
    public $kind;
    public $updated;
    public $created;
    public $deleted;
    public $beforeSelectedText;
    public $currentVersionRanges;
    public $afterSelectedText;
    public $clientVersionRanges;
    public $volumeId;
    public $pageIds;
    public $layerId;
    public $selectedText;
    public $highlightStyle;
    public $data;
    public $id;
    public $selfLink;
    protected $__currentVersionRangesType = 'Google_AnnotationCurrentVersionRanges';
    protected $__currentVersionRangesDataType = '';
    protected $__clientVersionRangesType = 'Google_AnnotationClientVersionRanges';
    protected $__clientVersionRangesDataType = '';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getBeforeSelectedText()
    {
        return $this->beforeSelectedText;
    }

    public function setBeforeSelectedText($beforeSelectedText)
    {
        $this->beforeSelectedText = $beforeSelectedText;
    }

    public function getCurrentVersionRanges()
    {
        return $this->currentVersionRanges;
    }

    public function setCurrentVersionRanges(Google_AnnotationCurrentVersionRanges $currentVersionRanges)
    {
        $this->currentVersionRanges = $currentVersionRanges;
    }

    public function getAfterSelectedText()
    {
        return $this->afterSelectedText;
    }

    public function setAfterSelectedText($afterSelectedText)
    {
        $this->afterSelectedText = $afterSelectedText;
    }

    public function getClientVersionRanges()
    {
        return $this->clientVersionRanges;
    }

    public function setClientVersionRanges(Google_AnnotationClientVersionRanges $clientVersionRanges)
    {
        $this->clientVersionRanges = $clientVersionRanges;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getPageIds()
    {
        return $this->pageIds;
    }

    public function setPageIds(/* array(Google_string) */
        $pageIds)
    {
        $this->assertIsArray($pageIds, 'Google_string', __METHOD__);
        $this->pageIds = $pageIds;
    }

    public function getLayerId()
    {
        return $this->layerId;
    }

    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    public function getSelectedText()
    {
        return $this->selectedText;
    }

    public function setSelectedText($selectedText)
    {
        $this->selectedText = $selectedText;
    }

    public function getHighlightStyle()
    {
        return $this->highlightStyle;
    }

    public function setHighlightStyle($highlightStyle)
    {
        $this->highlightStyle = $highlightStyle;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_AnnotationClientVersionRanges extends Google_Model
{
    public $contentVersion;
    public $gbTextRange;
    public $cfiRange;
    public $gbImageRange;
    protected $__gbTextRangeType = 'Google_BooksAnnotationsRange';
    protected $__gbTextRangeDataType = '';
    protected $__cfiRangeType = 'Google_BooksAnnotationsRange';
    protected $__cfiRangeDataType = '';
    protected $__gbImageRangeType = 'Google_BooksAnnotationsRange';
    protected $__gbImageRangeDataType = '';

    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    public function getGbTextRange()
    {
        return $this->gbTextRange;
    }

    public function setGbTextRange(Google_BooksAnnotationsRange $gbTextRange)
    {
        $this->gbTextRange = $gbTextRange;
    }

    public function getCfiRange()
    {
        return $this->cfiRange;
    }

    public function setCfiRange(Google_BooksAnnotationsRange $cfiRange)
    {
        $this->cfiRange = $cfiRange;
    }

    public function getGbImageRange()
    {
        return $this->gbImageRange;
    }

    public function setGbImageRange(Google_BooksAnnotationsRange $gbImageRange)
    {
        $this->gbImageRange = $gbImageRange;
    }
}

class Google_AnnotationCurrentVersionRanges extends Google_Model
{
    public $contentVersion;
    public $gbTextRange;
    public $cfiRange;
    public $gbImageRange;
    protected $__gbTextRangeType = 'Google_BooksAnnotationsRange';
    protected $__gbTextRangeDataType = '';
    protected $__cfiRangeType = 'Google_BooksAnnotationsRange';
    protected $__cfiRangeDataType = '';
    protected $__gbImageRangeType = 'Google_BooksAnnotationsRange';
    protected $__gbImageRangeDataType = '';

    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    public function getGbTextRange()
    {
        return $this->gbTextRange;
    }

    public function setGbTextRange(Google_BooksAnnotationsRange $gbTextRange)
    {
        $this->gbTextRange = $gbTextRange;
    }

    public function getCfiRange()
    {
        return $this->cfiRange;
    }

    public function setCfiRange(Google_BooksAnnotationsRange $cfiRange)
    {
        $this->cfiRange = $cfiRange;
    }

    public function getGbImageRange()
    {
        return $this->gbImageRange;
    }

    public function setGbImageRange(Google_BooksAnnotationsRange $gbImageRange)
    {
        $this->gbImageRange = $gbImageRange;
    }
}

class Google_Annotationdata extends Google_Model
{
    public $annotationType;
    public $kind;
    public $updated;
    public $volumeId;
    public $encoded_data;
    public $layerId;
    public $data;
    public $id;
    public $selfLink;
    protected $__dataType = 'Google_BooksLayerGeoData';
    protected $__dataDataType = '';

    public function getAnnotationType()
    {
        return $this->annotationType;
    }

    public function setAnnotationType($annotationType)
    {
        $this->annotationType = $annotationType;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getEncoded_data()
    {
        return $this->encoded_data;
    }

    public function setEncoded_data($encoded_data)
    {
        $this->encoded_data = $encoded_data;
    }

    public function getLayerId()
    {
        return $this->layerId;
    }

    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData(Google_BooksLayerGeoData $data)
    {
        $this->data = $data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Annotations extends Google_Model
{
    public $nextPageToken;
    public $items;
    public $kind;
    public $totalItems;
    protected $__itemsType = 'Google_Annotation';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(/* array(Google_Annotation) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Annotation', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
}

class Google_Annotationsdata extends Google_Model
{
    public $nextPageToken;
    public $items;
    public $kind;
    public $totalItems;
    protected $__itemsType = 'Google_Annotationdata';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(/* array(Google_Annotationdata) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Annotationdata', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
}

class Google_BooksAnnotationsRange extends Google_Model
{
    public $startPosition;
    public $endPosition;
    public $startOffset;
    public $endOffset;

    public function getStartPosition()
    {
        return $this->startPosition;
    }

    public function setStartPosition($startPosition)
    {
        $this->startPosition = $startPosition;
    }

    public function getEndPosition()
    {
        return $this->endPosition;
    }

    public function setEndPosition($endPosition)
    {
        $this->endPosition = $endPosition;
    }

    public function getStartOffset()
    {
        return $this->startOffset;
    }

    public function setStartOffset($startOffset)
    {
        $this->startOffset = $startOffset;
    }

    public function getEndOffset()
    {
        return $this->endOffset;
    }

    public function setEndOffset($endOffset)
    {
        $this->endOffset = $endOffset;
    }
}

class Google_BooksLayerGeoData extends Google_Model
{
    public $geo;
    public $common;
    protected $__geoType = 'Google_BooksLayerGeoDataGeo';
    protected $__geoDataType = '';
    protected $__commonType = 'Google_BooksLayerGeoDataCommon';
    protected $__commonDataType = '';

    public function getGeo()
    {
        return $this->geo;
    }

    public function setGeo(Google_BooksLayerGeoDataGeo $geo)
    {
        $this->geo = $geo;
    }

    public function getCommon()
    {
        return $this->common;
    }

    public function setCommon(Google_BooksLayerGeoDataCommon $common)
    {
        $this->common = $common;
    }
}

class Google_BooksLayerGeoDataCommon extends Google_Model
{
    public $lang;
    public $previewImageUrl;
    public $snippet;
    public $snippetUrl;

    public function getLang()
    {
        return $this->lang;
    }

    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    public function getPreviewImageUrl()
    {
        return $this->previewImageUrl;
    }

    public function setPreviewImageUrl($previewImageUrl)
    {
        $this->previewImageUrl = $previewImageUrl;
    }

    public function getSnippet()
    {
        return $this->snippet;
    }

    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;
    }

    public function getSnippetUrl()
    {
        return $this->snippetUrl;
    }

    public function setSnippetUrl($snippetUrl)
    {
        $this->snippetUrl = $snippetUrl;
    }
}

class Google_BooksLayerGeoDataGeo extends Google_Model
{
    public $countryCode;
    public $title;
    public $zoom;
    public $longitude;
    public $mapType;
    public $latitude;
    public $boundary;
    public $viewport;
    public $cachePolicy;
    protected $__boundaryType = 'Google_BooksLayerGeoDataGeoBoundary';
    protected $__boundaryDataType = 'array';
    protected $__viewportType = 'Google_BooksLayerGeoDataGeoViewport';
    protected $__viewportDataType = '';

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getZoom()
    {
        return $this->zoom;
    }

    public function setZoom($zoom)
    {
        $this->zoom = $zoom;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getMapType()
    {
        return $this->mapType;
    }

    public function setMapType($mapType)
    {
        $this->mapType = $mapType;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getBoundary()
    {
        return $this->boundary;
    }

    public function setBoundary(/* array(Google_BooksLayerGeoDataGeoBoundary) */
        $boundary)
    {
        $this->assertIsArray($boundary, 'Google_BooksLayerGeoDataGeoBoundary', __METHOD__);
        $this->boundary = $boundary;
    }

    public function getViewport()
    {
        return $this->viewport;
    }

    public function setViewport(Google_BooksLayerGeoDataGeoViewport $viewport)
    {
        $this->viewport = $viewport;
    }

    public function getCachePolicy()
    {
        return $this->cachePolicy;
    }

    public function setCachePolicy($cachePolicy)
    {
        $this->cachePolicy = $cachePolicy;
    }
}

class Google_BooksLayerGeoDataGeoBoundary extends Google_Model
{
    public $latitude;
    public $longitude;

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
}

class Google_BooksLayerGeoDataGeoViewport extends Google_Model
{
    public $lo;
    public $hi;
    protected $__loType = 'Google_BooksLayerGeoDataGeoViewportLo';
    protected $__loDataType = '';
    protected $__hiType = 'Google_BooksLayerGeoDataGeoViewportHi';
    protected $__hiDataType = '';

    public function getLo()
    {
        return $this->lo;
    }

    public function setLo(Google_BooksLayerGeoDataGeoViewportLo $lo)
    {
        $this->lo = $lo;
    }

    public function getHi()
    {
        return $this->hi;
    }

    public function setHi(Google_BooksLayerGeoDataGeoViewportHi $hi)
    {
        $this->hi = $hi;
    }
}

class Google_BooksLayerGeoDataGeoViewportHi extends Google_Model
{
    public $latitude;
    public $longitude;

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
}

class Google_BooksLayerGeoDataGeoViewportLo extends Google_Model
{
    public $latitude;
    public $longitude;

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
}

class Google_Bookshelf extends Google_Model
{
    public $kind;
    public $description;
    public $created;
    public $volumeCount;
    public $title;
    public $updated;
    public $access;
    public $volumesLastUpdated;
    public $id;
    public $selfLink;

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getVolumeCount()
    {
        return $this->volumeCount;
    }

    public function setVolumeCount($volumeCount)
    {
        $this->volumeCount = $volumeCount;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getAccess()
    {
        return $this->access;
    }

    public function setAccess($access)
    {
        $this->access = $access;
    }

    public function getVolumesLastUpdated()
    {
        return $this->volumesLastUpdated;
    }

    public function setVolumesLastUpdated($volumesLastUpdated)
    {
        $this->volumesLastUpdated = $volumesLastUpdated;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Bookshelves extends Google_Model
{
    public $items;
    public $kind;
    protected $__itemsType = 'Google_Bookshelf';
    protected $__itemsDataType = 'array';

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(/* array(Google_Bookshelf) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Bookshelf', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_ConcurrentAccessRestriction extends Google_Model
{
    public $nonce;
    public $kind;
    public $restricted;
    public $volumeId;
    public $maxConcurrentDevices;
    public $deviceAllowed;
    public $source;
    public $timeWindowSeconds;
    public $signature;
    public $reasonCode;
    public $message;

    public function getNonce()
    {
        return $this->nonce;
    }

    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getRestricted()
    {
        return $this->restricted;
    }

    public function setRestricted($restricted)
    {
        $this->restricted = $restricted;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getMaxConcurrentDevices()
    {
        return $this->maxConcurrentDevices;
    }

    public function setMaxConcurrentDevices($maxConcurrentDevices)
    {
        $this->maxConcurrentDevices = $maxConcurrentDevices;
    }

    public function getDeviceAllowed()
    {
        return $this->deviceAllowed;
    }

    public function setDeviceAllowed($deviceAllowed)
    {
        $this->deviceAllowed = $deviceAllowed;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getTimeWindowSeconds()
    {
        return $this->timeWindowSeconds;
    }

    public function setTimeWindowSeconds($timeWindowSeconds)
    {
        $this->timeWindowSeconds = $timeWindowSeconds;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}

class Google_DownloadAccessRestriction extends Google_Model
{
    public $nonce;
    public $kind;
    public $justAcquired;
    public $maxDownloadDevices;
    public $downloadsAcquired;
    public $signature;
    public $volumeId;
    public $deviceAllowed;
    public $source;
    public $restricted;
    public $reasonCode;
    public $message;

    public function getNonce()
    {
        return $this->nonce;
    }

    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getJustAcquired()
    {
        return $this->justAcquired;
    }

    public function setJustAcquired($justAcquired)
    {
        $this->justAcquired = $justAcquired;
    }

    public function getMaxDownloadDevices()
    {
        return $this->maxDownloadDevices;
    }

    public function setMaxDownloadDevices($maxDownloadDevices)
    {
        $this->maxDownloadDevices = $maxDownloadDevices;
    }

    public function getDownloadsAcquired()
    {
        return $this->downloadsAcquired;
    }

    public function setDownloadsAcquired($downloadsAcquired)
    {
        $this->downloadsAcquired = $downloadsAcquired;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getDeviceAllowed()
    {
        return $this->deviceAllowed;
    }

    public function setDeviceAllowed($deviceAllowed)
    {
        $this->deviceAllowed = $deviceAllowed;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getRestricted()
    {
        return $this->restricted;
    }

    public function setRestricted($restricted)
    {
        $this->restricted = $restricted;
    }

    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}

class Google_DownloadAccesses extends Google_Model
{
    public $downloadAccessList;
    public $kind;
    protected $__downloadAccessListType = 'Google_DownloadAccessRestriction';
    protected $__downloadAccessListDataType = 'array';

    public function getDownloadAccessList()
    {
        return $this->downloadAccessList;
    }

    public function setDownloadAccessList(/* array(Google_DownloadAccessRestriction) */
        $downloadAccessList)
    {
        $this->assertIsArray($downloadAccessList, 'Google_DownloadAccessRestriction', __METHOD__);
        $this->downloadAccessList = $downloadAccessList;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Layersummaries extends Google_Model
{
    public $totalItems;
    public $items;
    public $kind;
    protected $__itemsType = 'Google_Layersummary';
    protected $__itemsDataType = 'array';

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(/* array(Google_Layersummary) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Layersummary', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Layersummary extends Google_Model
{
    public $kind;
    public $annotationCount;
    public $dataCount;
    public $annotationsLink;
    public $updated;
    public $volumeId;
    public $id;
    public $annotationTypes;
    public $contentVersion;
    public $layerId;
    public $annotationsDataLink;
    public $selfLink;

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getAnnotationCount()
    {
        return $this->annotationCount;
    }

    public function setAnnotationCount($annotationCount)
    {
        $this->annotationCount = $annotationCount;
    }

    public function getDataCount()
    {
        return $this->dataCount;
    }

    public function setDataCount($dataCount)
    {
        $this->dataCount = $dataCount;
    }

    public function getAnnotationsLink()
    {
        return $this->annotationsLink;
    }

    public function setAnnotationsLink($annotationsLink)
    {
        $this->annotationsLink = $annotationsLink;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAnnotationTypes()
    {
        return $this->annotationTypes;
    }

    public function setAnnotationTypes(/* array(Google_string) */
        $annotationTypes)
    {
        $this->assertIsArray($annotationTypes, 'Google_string', __METHOD__);
        $this->annotationTypes = $annotationTypes;
    }

    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    public function getLayerId()
    {
        return $this->layerId;
    }

    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    public function getAnnotationsDataLink()
    {
        return $this->annotationsDataLink;
    }

    public function setAnnotationsDataLink($annotationsDataLink)
    {
        $this->annotationsDataLink = $annotationsDataLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_ReadingPosition extends Google_Model
{
    public $kind;
    public $gbImagePosition;
    public $epubCfiPosition;
    public $updated;
    public $volumeId;
    public $pdfPosition;
    public $gbTextPosition;

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getGbImagePosition()
    {
        return $this->gbImagePosition;
    }

    public function setGbImagePosition($gbImagePosition)
    {
        $this->gbImagePosition = $gbImagePosition;
    }

    public function getEpubCfiPosition()
    {
        return $this->epubCfiPosition;
    }

    public function setEpubCfiPosition($epubCfiPosition)
    {
        $this->epubCfiPosition = $epubCfiPosition;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getPdfPosition()
    {
        return $this->pdfPosition;
    }

    public function setPdfPosition($pdfPosition)
    {
        $this->pdfPosition = $pdfPosition;
    }

    public function getGbTextPosition()
    {
        return $this->gbTextPosition;
    }

    public function setGbTextPosition($gbTextPosition)
    {
        $this->gbTextPosition = $gbTextPosition;
    }
}

class Google_RequestAccess extends Google_Model
{
    public $downloadAccess;
    public $kind;
    public $concurrentAccess;
    protected $__downloadAccessType = 'Google_DownloadAccessRestriction';
    protected $__downloadAccessDataType = '';
    protected $__concurrentAccessType = 'Google_ConcurrentAccessRestriction';
    protected $__concurrentAccessDataType = '';

    public function getDownloadAccess()
    {
        return $this->downloadAccess;
    }

    public function setDownloadAccess(Google_DownloadAccessRestriction $downloadAccess)
    {
        $this->downloadAccess = $downloadAccess;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getConcurrentAccess()
    {
        return $this->concurrentAccess;
    }

    public function setConcurrentAccess(Google_ConcurrentAccessRestriction $concurrentAccess)
    {
        $this->concurrentAccess = $concurrentAccess;
    }
}

class Google_Review extends Google_Model
{
    public $rating;
    public $kind;
    public $author;
    public $title;
    public $volumeId;
    public $content;
    public $source;
    public $date;
    public $type;
    public $fullTextUrl;
    protected $__authorType = 'Google_ReviewAuthor';
    protected $__authorDataType = '';
    protected $__sourceType = 'Google_ReviewSource';
    protected $__sourceDataType = '';

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(Google_ReviewAuthor $author)
    {
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource(Google_ReviewSource $source)
    {
        $this->source = $source;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getFullTextUrl()
    {
        return $this->fullTextUrl;
    }

    public function setFullTextUrl($fullTextUrl)
    {
        $this->fullTextUrl = $fullTextUrl;
    }
}

class Google_ReviewAuthor extends Google_Model
{
    public $displayName;

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
}

class Google_ReviewSource extends Google_Model
{
    public $extraDescription;
    public $url;
    public $description;

    public function getExtraDescription()
    {
        return $this->extraDescription;
    }

    public function setExtraDescription($extraDescription)
    {
        $this->extraDescription = $extraDescription;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}

class Google_Volume extends Google_Model
{
    public $kind;
    public $accessInfo;
    public $searchInfo;
    public $saleInfo;
    public $etag;
    public $userInfo;
    public $volumeInfo;
    public $id;
    public $selfLink;
    protected $__accessInfoType = 'Google_VolumeAccessInfo';
    protected $__accessInfoDataType = '';
    protected $__searchInfoType = 'Google_VolumeSearchInfo';
    protected $__searchInfoDataType = '';
    protected $__saleInfoType = 'Google_VolumeSaleInfo';
    protected $__saleInfoDataType = '';
    protected $__userInfoType = 'Google_VolumeUserInfo';
    protected $__userInfoDataType = '';
    protected $__volumeInfoType = 'Google_VolumeVolumeInfo';
    protected $__volumeInfoDataType = '';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getAccessInfo()
    {
        return $this->accessInfo;
    }

    public function setAccessInfo(Google_VolumeAccessInfo $accessInfo)
    {
        $this->accessInfo = $accessInfo;
    }

    public function getSearchInfo()
    {
        return $this->searchInfo;
    }

    public function setSearchInfo(Google_VolumeSearchInfo $searchInfo)
    {
        $this->searchInfo = $searchInfo;
    }

    public function getSaleInfo()
    {
        return $this->saleInfo;
    }

    public function setSaleInfo(Google_VolumeSaleInfo $saleInfo)
    {
        $this->saleInfo = $saleInfo;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getUserInfo()
    {
        return $this->userInfo;
    }

    public function setUserInfo(Google_VolumeUserInfo $userInfo)
    {
        $this->userInfo = $userInfo;
    }

    public function getVolumeInfo()
    {
        return $this->volumeInfo;
    }

    public function setVolumeInfo(Google_VolumeVolumeInfo $volumeInfo)
    {
        $this->volumeInfo = $volumeInfo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_VolumeAccessInfo extends Google_Model
{
    public $webReaderLink;
    public $publicDomain;
    public $embeddable;
    public $downloadAccess;
    public $country;
    public $viewOrderUrl;
    public $textToSpeechPermission;
    public $pdf;
    public $viewability;
    public $epub;
    public $accessViewStatus;
    protected $__downloadAccessType = 'Google_DownloadAccessRestriction';
    protected $__downloadAccessDataType = '';
    protected $__pdfType = 'Google_VolumeAccessInfoPdf';
    protected $__pdfDataType = '';
    protected $__epubType = 'Google_VolumeAccessInfoEpub';
    protected $__epubDataType = '';

    public function getWebReaderLink()
    {
        return $this->webReaderLink;
    }

    public function setWebReaderLink($webReaderLink)
    {
        $this->webReaderLink = $webReaderLink;
    }

    public function getPublicDomain()
    {
        return $this->publicDomain;
    }

    public function setPublicDomain($publicDomain)
    {
        $this->publicDomain = $publicDomain;
    }

    public function getEmbeddable()
    {
        return $this->embeddable;
    }

    public function setEmbeddable($embeddable)
    {
        $this->embeddable = $embeddable;
    }

    public function getDownloadAccess()
    {
        return $this->downloadAccess;
    }

    public function setDownloadAccess(Google_DownloadAccessRestriction $downloadAccess)
    {
        $this->downloadAccess = $downloadAccess;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getViewOrderUrl()
    {
        return $this->viewOrderUrl;
    }

    public function setViewOrderUrl($viewOrderUrl)
    {
        $this->viewOrderUrl = $viewOrderUrl;
    }

    public function getTextToSpeechPermission()
    {
        return $this->textToSpeechPermission;
    }

    public function setTextToSpeechPermission($textToSpeechPermission)
    {
        $this->textToSpeechPermission = $textToSpeechPermission;
    }

    public function getPdf()
    {
        return $this->pdf;
    }

    public function setPdf(Google_VolumeAccessInfoPdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function getViewability()
    {
        return $this->viewability;
    }

    public function setViewability($viewability)
    {
        $this->viewability = $viewability;
    }

    public function getEpub()
    {
        return $this->epub;
    }

    public function setEpub(Google_VolumeAccessInfoEpub $epub)
    {
        $this->epub = $epub;
    }

    public function getAccessViewStatus()
    {
        return $this->accessViewStatus;
    }

    public function setAccessViewStatus($accessViewStatus)
    {
        $this->accessViewStatus = $accessViewStatus;
    }
}

class Google_VolumeAccessInfoEpub extends Google_Model
{
    public $isAvailable;
    public $downloadLink;
    public $acsTokenLink;

    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
    }

    public function getAcsTokenLink()
    {
        return $this->acsTokenLink;
    }

    public function setAcsTokenLink($acsTokenLink)
    {
        $this->acsTokenLink = $acsTokenLink;
    }
}

class Google_VolumeAccessInfoPdf extends Google_Model
{
    public $isAvailable;
    public $downloadLink;
    public $acsTokenLink;

    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
    }

    public function getAcsTokenLink()
    {
        return $this->acsTokenLink;
    }

    public function setAcsTokenLink($acsTokenLink)
    {
        $this->acsTokenLink = $acsTokenLink;
    }
}

class Google_VolumeSaleInfo extends Google_Model
{
    public $country;
    public $retailPrice;
    public $isEbook;
    public $saleability;
    public $buyLink;
    public $onSaleDate;
    public $listPrice;
    protected $__retailPriceType = 'Google_VolumeSaleInfoRetailPrice';
    protected $__retailPriceDataType = '';
    protected $__listPriceType = 'Google_VolumeSaleInfoListPrice';
    protected $__listPriceDataType = '';

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getRetailPrice()
    {
        return $this->retailPrice;
    }

    public function setRetailPrice(Google_VolumeSaleInfoRetailPrice $retailPrice)
    {
        $this->retailPrice = $retailPrice;
    }

    public function getIsEbook()
    {
        return $this->isEbook;
    }

    public function setIsEbook($isEbook)
    {
        $this->isEbook = $isEbook;
    }

    public function getSaleability()
    {
        return $this->saleability;
    }

    public function setSaleability($saleability)
    {
        $this->saleability = $saleability;
    }

    public function getBuyLink()
    {
        return $this->buyLink;
    }

    public function setBuyLink($buyLink)
    {
        $this->buyLink = $buyLink;
    }

    public function getOnSaleDate()
    {
        return $this->onSaleDate;
    }

    public function setOnSaleDate($onSaleDate)
    {
        $this->onSaleDate = $onSaleDate;
    }

    public function getListPrice()
    {
        return $this->listPrice;
    }

    public function setListPrice(Google_VolumeSaleInfoListPrice $listPrice)
    {
        $this->listPrice = $listPrice;
    }
}

class Google_VolumeSaleInfoListPrice extends Google_Model
{
    public $amount;
    public $currencyCode;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }
}

class Google_VolumeSaleInfoRetailPrice extends Google_Model
{
    public $amount;
    public $currencyCode;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }
}

class Google_VolumeSearchInfo extends Google_Model
{
    public $textSnippet;

    public function getTextSnippet()
    {
        return $this->textSnippet;
    }

    public function setTextSnippet($textSnippet)
    {
        $this->textSnippet = $textSnippet;
    }
}

class Google_VolumeUserInfo extends Google_Model
{
    public $isInMyBooks;
    public $updated;
    public $review;
    public $isPurchased;
    public $readingPosition;
    public $isPreordered;
    protected $__reviewType = 'Google_Review';
    protected $__reviewDataType = '';
    protected $__readingPositionType = 'Google_ReadingPosition';
    protected $__readingPositionDataType = '';

    public function getIsInMyBooks()
    {
        return $this->isInMyBooks;
    }

    public function setIsInMyBooks($isInMyBooks)
    {
        $this->isInMyBooks = $isInMyBooks;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getReview()
    {
        return $this->review;
    }

    public function setReview(Google_Review $review)
    {
        $this->review = $review;
    }

    public function getIsPurchased()
    {
        return $this->isPurchased;
    }

    public function setIsPurchased($isPurchased)
    {
        $this->isPurchased = $isPurchased;
    }

    public function getReadingPosition()
    {
        return $this->readingPosition;
    }

    public function setReadingPosition(Google_ReadingPosition $readingPosition)
    {
        $this->readingPosition = $readingPosition;
    }

    public function getIsPreordered()
    {
        return $this->isPreordered;
    }

    public function setIsPreordered($isPreordered)
    {
        $this->isPreordered = $isPreordered;
    }
}

class Google_VolumeVolumeInfo extends Google_Model
{
    public $publisher;
    public $subtitle;
    public $description;
    public $language;
    public $pageCount;
    public $imageLinks;
    public $publishedDate;
    public $previewLink;
    public $printType;
    public $ratingsCount;
    public $mainCategory;
    public $dimensions;
    public $contentVersion;
    public $industryIdentifiers;
    public $authors;
    public $title;
    public $canonicalVolumeLink;
    public $infoLink;
    public $categories;
    public $averageRating;
    protected $__imageLinksType = 'Google_VolumeVolumeInfoImageLinks';
    protected $__imageLinksDataType = '';
    protected $__dimensionsType = 'Google_VolumeVolumeInfoDimensions';
    protected $__dimensionsDataType = '';
    protected $__industryIdentifiersType = 'Google_VolumeVolumeInfoIndustryIdentifiers';
    protected $__industryIdentifiersDataType = 'array';

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getSubtitle()
    {
        return $this->subtitle;
    }

    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getPageCount()
    {
        return $this->pageCount;
    }

    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;
    }

    public function getImageLinks()
    {
        return $this->imageLinks;
    }

    public function setImageLinks(Google_VolumeVolumeInfoImageLinks $imageLinks)
    {
        $this->imageLinks = $imageLinks;
    }

    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }

    public function getPreviewLink()
    {
        return $this->previewLink;
    }

    public function setPreviewLink($previewLink)
    {
        $this->previewLink = $previewLink;
    }

    public function getPrintType()
    {
        return $this->printType;
    }

    public function setPrintType($printType)
    {
        $this->printType = $printType;
    }

    public function getRatingsCount()
    {
        return $this->ratingsCount;
    }

    public function setRatingsCount($ratingsCount)
    {
        $this->ratingsCount = $ratingsCount;
    }

    public function getMainCategory()
    {
        return $this->mainCategory;
    }

    public function setMainCategory($mainCategory)
    {
        $this->mainCategory = $mainCategory;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function setDimensions(Google_VolumeVolumeInfoDimensions $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    public function getIndustryIdentifiers()
    {
        return $this->industryIdentifiers;
    }

    public function setIndustryIdentifiers(/* array(Google_VolumeVolumeInfoIndustryIdentifiers) */
        $industryIdentifiers)
    {
        $this->assertIsArray($industryIdentifiers, 'Google_VolumeVolumeInfoIndustryIdentifiers', __METHOD__);
        $this->industryIdentifiers = $industryIdentifiers;
    }

    public function getAuthors()
    {
        return $this->authors;
    }

    public function setAuthors(/* array(Google_string) */
        $authors)
    {
        $this->assertIsArray($authors, 'Google_string', __METHOD__);
        $this->authors = $authors;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCanonicalVolumeLink()
    {
        return $this->canonicalVolumeLink;
    }

    public function setCanonicalVolumeLink($canonicalVolumeLink)
    {
        $this->canonicalVolumeLink = $canonicalVolumeLink;
    }

    public function getInfoLink()
    {
        return $this->infoLink;
    }

    public function setInfoLink($infoLink)
    {
        $this->infoLink = $infoLink;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories(/* array(Google_string) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_string', __METHOD__);
        $this->categories = $categories;
    }

    public function getAverageRating()
    {
        return $this->averageRating;
    }

    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
    }
}

class Google_VolumeVolumeInfoDimensions extends Google_Model
{
    public $width;
    public $thickness;
    public $height;

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getThickness()
    {
        return $this->thickness;
    }

    public function setThickness($thickness)
    {
        $this->thickness = $thickness;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
}

class Google_VolumeVolumeInfoImageLinks extends Google_Model
{
    public $medium;
    public $smallThumbnail;
    public $large;
    public $extraLarge;
    public $small;
    public $thumbnail;

    public function getMedium()
    {
        return $this->medium;
    }

    public function setMedium($medium)
    {
        $this->medium = $medium;
    }

    public function getSmallThumbnail()
    {
        return $this->smallThumbnail;
    }

    public function setSmallThumbnail($smallThumbnail)
    {
        $this->smallThumbnail = $smallThumbnail;
    }

    public function getLarge()
    {
        return $this->large;
    }

    public function setLarge($large)
    {
        $this->large = $large;
    }

    public function getExtraLarge()
    {
        return $this->extraLarge;
    }

    public function setExtraLarge($extraLarge)
    {
        $this->extraLarge = $extraLarge;
    }

    public function getSmall()
    {
        return $this->small;
    }

    public function setSmall($small)
    {
        $this->small = $small;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
}

class Google_VolumeVolumeInfoIndustryIdentifiers extends Google_Model
{
    public $identifier;
    public $type;

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_Volumeannotation extends Google_Model
{
    public $annotationType;
    public $kind;
    public $updated;
    public $deleted;
    public $contentRanges;
    public $selectedText;
    public $volumeId;
    public $annotationDataId;
    public $annotationDataLink;
    public $pageIds;
    public $layerId;
    public $data;
    public $id;
    public $selfLink;
    protected $__contentRangesType = 'Google_VolumeannotationContentRanges';
    protected $__contentRangesDataType = '';

    public function getAnnotationType()
    {
        return $this->annotationType;
    }

    public function setAnnotationType($annotationType)
    {
        $this->annotationType = $annotationType;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getContentRanges()
    {
        return $this->contentRanges;
    }

    public function setContentRanges(Google_VolumeannotationContentRanges $contentRanges)
    {
        $this->contentRanges = $contentRanges;
    }

    public function getSelectedText()
    {
        return $this->selectedText;
    }

    public function setSelectedText($selectedText)
    {
        $this->selectedText = $selectedText;
    }

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function getAnnotationDataId()
    {
        return $this->annotationDataId;
    }

    public function setAnnotationDataId($annotationDataId)
    {
        $this->annotationDataId = $annotationDataId;
    }

    public function getAnnotationDataLink()
    {
        return $this->annotationDataLink;
    }

    public function setAnnotationDataLink($annotationDataLink)
    {
        $this->annotationDataLink = $annotationDataLink;
    }

    public function getPageIds()
    {
        return $this->pageIds;
    }

    public function setPageIds(/* array(Google_string) */
        $pageIds)
    {
        $this->assertIsArray($pageIds, 'Google_string', __METHOD__);
        $this->pageIds = $pageIds;
    }

    public function getLayerId()
    {
        return $this->layerId;
    }

    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_VolumeannotationContentRanges extends Google_Model
{
    public $contentVersion;
    public $gbTextRange;
    public $cfiRange;
    public $gbImageRange;
    protected $__gbTextRangeType = 'Google_BooksAnnotationsRange';
    protected $__gbTextRangeDataType = '';
    protected $__cfiRangeType = 'Google_BooksAnnotationsRange';
    protected $__cfiRangeDataType = '';
    protected $__gbImageRangeType = 'Google_BooksAnnotationsRange';
    protected $__gbImageRangeDataType = '';

    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    public function getGbTextRange()
    {
        return $this->gbTextRange;
    }

    public function setGbTextRange(Google_BooksAnnotationsRange $gbTextRange)
    {
        $this->gbTextRange = $gbTextRange;
    }

    public function getCfiRange()
    {
        return $this->cfiRange;
    }

    public function setCfiRange(Google_BooksAnnotationsRange $cfiRange)
    {
        $this->cfiRange = $cfiRange;
    }

    public function getGbImageRange()
    {
        return $this->gbImageRange;
    }

    public function setGbImageRange(Google_BooksAnnotationsRange $gbImageRange)
    {
        $this->gbImageRange = $gbImageRange;
    }
}

class Google_Volumeannotations extends Google_Model
{
    public $nextPageToken;
    public $items;
    public $kind;
    public $totalItems;
    protected $__itemsType = 'Google_Volumeannotation';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(/* array(Google_Volumeannotation) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Volumeannotation', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
}

class Google_Volumes extends Google_Model
{
    public $totalItems;
    public $items;
    public $kind;
    protected $__itemsType = 'Google_Volume';
    protected $__itemsDataType = 'array';

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(/* array(Google_Volume) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Volume', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}
