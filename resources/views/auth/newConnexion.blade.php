@extends('layouts.client')
@section('content')

    <form action="">
        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Mail</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="email"   placeholder="Entrer votre mail" />
                   
                </div>
            </div>
        </div>
        <button type="submit">send</button>
    </form>

@endsection
