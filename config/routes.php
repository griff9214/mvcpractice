<?
return array(
  '^news$' => 'news/ViewAll',
  '^news/(\d+)$' => 'news/ViewItem/$1',
  '^news/(\w+)$' => 'news/ViewCat/$1',
  '^news/(\w+)/(\d*)$' => 'news/ViewItemInCat/$1/$2',
  '^products$' => 'products/ViewAll',
  '^products/(\d{1,})$' => 'products/ViewItem',
//  '' => '',
);