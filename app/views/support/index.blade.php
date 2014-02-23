@extends('users.layout')

@section('content')
<div class="box-post-container">
@foreach($news as $novost)
         
         
                                            	<h3 class="c-title">{{ $novost->title }}</h3>
                                            	<p> created at: {{ $novost->created_at }} updated at: {{ $novost->updated_at }}</p><hr>
                                                <div class="c-text">
													<p>{{ $novost->msg }}</p>
											
                                                    	
                                                    
                                                </div>
                                            
                                        
                                       
                            		
                            		 @endforeach
									 </div>
									 </div>
									 </div>
@stop