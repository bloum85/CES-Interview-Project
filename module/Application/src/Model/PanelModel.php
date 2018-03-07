<?php

namespace Application\Model;
/**
* A panel model storing data for the panel endpoints.
* Typically, a model file would pull data from a DB
* but for the purposes of this project, the data has
* been hard coded within this file.
*/
class PanelModel {

  /**
  * An array storing the data for panel endpoints
  *
  * @var array
  */
  private $panels;

  public function __construct() {

    $this->panels = [
        [
            'id' => 1,
            'name' => 'Commercial',
            'content' => 'In a “time is money” world, outperforming your service expectations sets CES apart. Have
an immediate need? CES clients know when they pick up the phone a trained professional is
ready to respond with action. That means free local delivery … prompt answers to your
questions … and bid quoting support. When it comes to in-depth commercial service, no
other wholesaler surpasses CES!'
        ],
        [
            'id' => 2,
            'name' => 'Residential',
            'content' => 'Every electrical contractor knows the residential market has its unique challenges,
especially when it comes to packaging an order for a specific residence. That’s why our
customers depend on CES for unsurpassed billing clarity! We save you time and money by
structuring our billing to accommodate your needs, differentiating between an order for
one house, several structures or an entire complex.'
        ],
        [
          'id' => 3,
          'name' => 'Manufacturing',
          'content' => 'In today’s manufacturing markets saving money through energy efficiency is of major
importance. That’s why electrical contractors around the world so highly value our support.
We review every aspect of your project, looking for ways to save you money through
optimum efficiency and reduced energy use. We provide recommendations, differentiate
between product options and offer proven solutions to help you get the best possible
results – efficiently and effectively!'
        ]
    ];

  }

  /**
 * Gets the panel data associated with an id
 *
 * @param int $id The id associated with the panel
 */
  public function getById($id) {
    return array_filter($this->panels, function($panel) use ($id) {
      return $panel['id'] == $id;
    })
  }

  /**
 * Returns an array containing the name and id associated with a panel
 *
 */
  public function getList() {
    return array_map(function($panel){
      unset($panel['content']);
      return $panel;
    }, $this->panels);
  }

}
