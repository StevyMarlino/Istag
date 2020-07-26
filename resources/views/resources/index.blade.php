@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-10">
            <h2>Etudiant</h2>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Liste des Etudiants</h5>
                        <div class="ibox-content">
                            <div class="table-responsive">

                                <button class="btn btn-outline btn-primary" type="button" data-toggle="modal"
                                        data-target="#creation_modal">
                                    <i class="fa fa-plus"> Ajouter</i>
                                </button>

                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('Nom')}}</th>
                                        <th>{{__('Prénom')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Date de naissance')}}</th>
                                        <th> {{__('Numéro')}}</th>
                                        <th>{{__('Filière')}}</th>
                                        <th>{{__('Niveau')}}</th>
                                        <th>{{__('Inscrit le')}}</th>
                                         <th></th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($etudiants as $key=>  $etudiant)
                                        <tr class="">
                                            <td>{{$key+1}}</td>
                                            <td>{{$etudiant->name}}</td>
                                            <td> {{$etudiant->first_name}}</td>
                                            <td> {{$etudiant->email}} </td>
                                            <td> {{$etudiant->date_born}} </td>
                                            <td> {{$etudiant->phone}} </td>
                                            <td> {{$etudiant->filiere}} </td>
                                            <td> {{$etudiant->level}} </td>
                                            <td> {{$etudiant->created_at}} </td>

                                            <td>
                                                <button type="button" class="btn btn-xs btn-success" data-toggle="modal"
                                                        data-target="#edition_modal{{$etudiant->id}}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"
                                                        data-target="#delete_modal{{$etudiant->id}}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Liste des modals -->

    <!-- Modal d'ajout -->
    <div class="modal inmodal" id="creation_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <h4 class="modal-title"> {{__('Etudiant')}}</h4>

                </div>

                <form action=" {{ route('etudiant.store') }} " method="post">
                        @csrf
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Nom étudiant" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="first_name" placeholder="Prénom étudiant" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email étudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" placeholder="Numéro étudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="date_born" placeholder="Date de naissance etudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lieu" placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="transaction" placeholder="{{__('Numéro de transantion')}}" class="form-control">
                                </div>


                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <select class="select2_demo_1 form-control" name="cours" >
                                            <option value="jour" selected> {{__('Jour')}} </option>
                                            <option value="soir">{{__('Soir')}} </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="select2_demo_1 form-control" name="level">
                                        <option value="1" selected>Licence 1</option>
                                        <option value="2">Licence 2</option>
                                        <option value="3">Licence 3</option>
                                        <option value="4">Master 1</option>
                                        <option value="5">Master 2</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="select2_demo_1 form-control" name="filiere">
                                        <option value="info_com" selected>Info & com</option>
                                        <option value="gestion">Gestion</option>
                                        <option value="technology">Technologie</option>
                                        <option value="sante">Santé</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="file" name="acte_nais" placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="file" name="bacc" placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="releve_note" placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal de modification -->
    @foreach($etudiants as $etudiant)

        <div class="modal inmodal" id="edition_modal{{$etudiant->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>

                        <h4 class="modal-title">Modification</h4>

                    </div>

                    <form action=" {{ route('etudiant.update',$etudiant->id) }} " method="POST">
                    @method('put')
                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" value=" {{ $etudiant->name }} " placeholder="Nom étudiant" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="first_name" value=" {{ $etudiant->first_name }} " placeholder="Prénom étudiant" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" value=" {{ $etudiant->email }} " placeholder="Email étudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" value=" {{ $etudiant->phone }} " placeholder="Numéro étudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="date_born" value=" {{ $etudiant->date_born }} " placeholder="Date de naissance etudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lieu" value=" {{ $etudiant->lieu }} " placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="transaction" placeholder="{{__('Numéro de transantion')}}" class="form-control">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <select class="select2_demo_1 form-control" name="cours" >
                                            <option value="jour" selected> {{__('Jour')}} </option>
                                            <option value="soir">{{__('Soir')}} </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="select2_demo_1 form-control" name="level">
                                        <option value="1" selected>Licence 1</option>
                                        <option value="2">Licence 2</option>
                                        <option value="3">Licence 3</option>
                                        <option value="4">Master 1</option>
                                        <option value="5">Master 2</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="select2_demo_1 form-control" name="filiere">
                                        <option value="info_com" selected>Info & com</option>
                                        <option value="gestion">Gestion</option>
                                        <option value="technology">Technologie</option>
                                        <option value="sante">Santé</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="file" name="acte_nais" placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="file" name="bacc" placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="releve_note" placeholder="Lieu de naissance etudiant" class="form-control">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>

                </div>
            </div>
        </div>

    @endforeach

    <!-- Modal de suppression -->
    @foreach($etudiants as $etudiant)

        <div class="modal inmodal fade" id="delete_modal{{$etudiant->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                        <i class="fa fa-exclamation-circle modal-icon" style="color:red"></i>
                        <h4 class="modal-title">ATTENTION !!</h4>
                        <h3>{{__('voulez-vous vraiment supprime cet étudiant ?')}}</h3>
                    </div>

                    <form action="{{route("etudiant.destroy",$etudiant->id)}}" method="POST">
                        @method('DELETE')
                        @csrf

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">{{__('NON')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('OUI')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endforeach

    <!--Fin de Liste des modals -->

@endsection

