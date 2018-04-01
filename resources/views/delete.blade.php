 @extends('layouts.master')
  @section('dynamique')
  
<table border="0px" style="width: 840px;">
    <form method="post" action="{{url('ticket/')}}">
        <tr>
            <td>
                <div class="mail-option">

                    {{csrf_field()}} {{method_field('delete')}}
                    <div class="chk-all">
                        <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                        <div class="btn-group">
                            <a data-toggle="dropdown" href="#" class="btn mini all">
                                                All
                                                  <i class="fa fa-angle-down "></i>
                                                </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> None</a></li>
                                <li><a href="#"> Read</a></li>
                                <li><a href="#"> Unread</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-group hidden-phone">
                        <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                     More
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a data-toggle="dropdown" href="#" class="btn mini blue">
                                     Move to
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        </ul>
                    </div>
                    <ul class="unstyled inbox-pagination">
                        <li><span>1-50 of 234</span></li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <table class="table table-inbox table-hover">
                    <thead class="unread">
                        <th></th>
                        <th>Libéllé</th>
                        <th>Les tâches</th>
                        <th>Salaire</th>
                        <th style="padding-left: 50px;">Date</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($a as $info)
                        <tr>
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox" value="{{$info->id}}" name="id[]">
                            </td>
                            <td class="view-message  dont-show">{{$info->libelle}}</td>
                            <td class="view-message ">{{$info->tache}}</td>
                            <td class="view-message">{{$info->salaire}}<i class="fa fa-usd"></i></td>
                            <td class="view-message">{{$info->created_at}}</td>
                            <td class="view-message"><i class="fa fa-download"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
    </form>
</table>

@endsection