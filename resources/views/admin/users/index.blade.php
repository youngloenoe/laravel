

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

@foreach($users as $user)
    <li>{!! $user['first_name'] !!} {!! $user['last_name'] !!} from {!! $user['location'] !!}</li> 
@endforeach    