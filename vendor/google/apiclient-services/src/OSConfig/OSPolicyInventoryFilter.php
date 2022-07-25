<?php
/*
 * Copyright 2014 Google Inc.
 *
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

namespace Google\Service\OSConfig;

class OSPolicyInventoryFilter extends \Google\Model
{
  /**
   * @var string
   */
  public $osShortName;
  /**
   * @var string
   */
  public $osVersion;

  /**
   * @param string
   */
  public function setOsShortName($osShortName)
  {
    $this->osShortName = $osShortName;
  }
  /**
   * @return string
   */
  public function getOsShortName()
  {
    return $this->osShortName;
  }
  /**
   * @param string
   */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /**
   * @return string
   */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OSPolicyInventoryFilter::class, 'Google_Service_OSConfig_OSPolicyInventoryFilter');
