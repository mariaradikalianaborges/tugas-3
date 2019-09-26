@extends('layouts.app')

@section('content')

</br></br></br></br>
    
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-md-9">
              <div class="panel panel-default">
               <div class="panel-body">
                <div class="post-detail">
                  @foreach($artikel as $item)
                  <h3>{!! $item->judul !!}</h3>
                  
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> Jan 5, 2019 </li>
                            <li><i class="fa fa-user"></i>{!! $item->users_id !!}</li>
                            <li class="pull-right">{!! $item->kategori_artikel_id !!}</li>
                        </ul>
                    </div>
                    <div class="info-meta">{!! $item->isi !!}</div>
                    @endforeach
                  </div>
                <div class="frame-tombol" >
                    <a href="" class="btn tombol-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="" title="Share on Facebook" target="_blank" class="btn tombol-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="" title="Share on Google+" target="_blank" class="btn tombol-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
                    <a href="" class="btn tombol-pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                    <a href="" class="btn tombol-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
                </div>                
                  
               </div>
               
            </div>
         </div>
        <div class="col-sm-3">
            
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 5, 2019 </a></li>
                            </ul>
                        </div>
                    </div><!--recent-->
                </div>
            </div>      
        </div>          
    </div>          
</div>
<!--FOOTER-->
<div class="footer-bottom">
    <div class="container-fluid text-center">
        <p>Copyright &copy; 2019,  DTC. Developed by <a href="https://ilmu-detil.blogspot.com/"> Pusat Artikel</a></p>
    </div>
</div>  
</div>   
@endsection