* New {order_type} order at {location_name} for {order_date} at {order_time}

=====================
@if(!empty($order_menus))
@foreach($order_menus as $order_menu)
- {{ $order_menu['menu_quantity'] }} x {{ $order_menu['menu_name'] }} {!! str_replace("<br />","\n  ",$order_menu['menu_options']) !!}
  {!! $order_menu['menu_comment'] !!}
@endforeach
@endif
=====================
Payment method: {order_payment}
@if(!empty($order_totals))
@foreach($order_totals as $order_total)
{{ $order_total['order_total_title'] }}: {{ $order_total['order_total_value'] }}
@endforeach
@endif
=====================
Please open the link and click "View" to see the order in the management platform: https://dev.blitzat.com/admin/thoughtco/kitchendisplay/views