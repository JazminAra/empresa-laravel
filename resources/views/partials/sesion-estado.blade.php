<style>
.alert-custom {
    background-color: #FFFF00;
    color: #000000;
    padding: 5px;
    border-radius: 1px;
    margin-bottom: 8px; 
    font-weight: bold; 
    display: flex;
    align-items: center;
    font-size: 1em;
}

.alert-custom strong {
    margin-right: 10px; 
    margin-left: 10px; 
    font-size: 1em; 
    font-weight: bold; 
}
</style>

@if(session('estado'))
    <div class="alert alert-custom">
        <strong>¡</strong> {{ session('estado') }} <strong>!</strong>
    </div>
@endif