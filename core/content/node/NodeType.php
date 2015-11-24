<?php
namespace inaden\content\node;

use Inaden;
use yii\base\Object;

class NodeType extends Object implements NodeTypeInterface
{
  protected $label;
  protected $commentable;
  protected $searchable;
  
  public function __construct($label = 'node',$config = [])
  {
    $this->label = $label;
    parent::__construct($config);
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function __toString()
  {
    return $this->label;
  }
}