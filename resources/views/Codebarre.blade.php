 @extends('layouts.master') 
 @section('dynamique')

<div class="container">
    <div>
        <SCRIPT LANGUAGE='javascript'>
            acode = new Code128()
            acode.code = '{{ Auth::user()->id }}'
            acode.type = 'CODE128'
            acode.withtext = true
            acode.xsize = 1
            acode.ysize = 50
            acode.xratio = 3.0
            acode.xinter = 1
            document.write(acode.draw())
        </SCRIPT>
    </div>
</div>

@endsection