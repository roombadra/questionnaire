<div>
   		<div class="d-grid gap-2 col-6 mx-auto">
  @if(!$show_form)
    <button wire:click='showForm()' class="btn btn-primary" type="button">Ajouter</button>
    <div class="row ">
        <span class="col-md-12">
            vous avez {{ $users }} clients!<br>
            {{ $user->agent }} a ajouté un nouveau client.
        </span>
    </div>
  @else
    <button wire:click='hideForm()'  class="btn btn-danger" type="button">Retour</button>
  @endif
  </div>
  @if($show_form)
        <div class="container mt-3">
          <form class="form-group">
            <div class="row">
              <div class="col-md-6">
                <br>
                <div class="col-md-6">
                <input wire:model='commune' class="form-control mt-3" type="text" placeholder="Commune">
                @error('commune')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br>
                <label for="q_1">Comment procédez-vous pour vos achats ?</label>
                <input wire:model='q_1' class="form-control" type="text" name="q_1">
                @error('q_1')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <label for="q_2">Combien payez vous comme transport de votre position jusqu’à votre lieu de ravitaillement Aller/Retour ?</label><br>
                <input wire:model='q_2' class="form-control" type="number" name="q_2">
                @error('q_2')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_3">Avez-vous un grossiste personnel ?</label><br>
                <input wire:model='q_3' type="radio" value="oui" id="q_3_1" name="q_3">
                <label for="q_3_1">Oui</label>
                <input wire:model='q_3' type="radio" value="non" id="q_3_2" name="q_3">
                <label for="q_3_2">Non</label>
                @error('q_3')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_4">Serez-vous content si quelqu’un vous livrais ?</label><br>
                <input wire:model='q_4' type="radio" value="oui" id="q_4_1" name="q_4">
                <label for="q_4_1">Oui</label>
                <input wire:model='q_4' type="radio" value="non" id="q_4_2" name="q_4">
                <label for="q_4_2">Non</label>
                @error('q_4')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_5">Serez-vous prêt à travailler avec un service de livraison ?</label><br>
                <input wire:model='q_5' type="radio" value="oui" id="q_5_1" name="q_5">
                <label for="q_5_1">Oui</label>
                <input wire:model='q_5' type="radio" value="non" id="q_5_2" name="q_5">
                <label for="q_5_2">Non</label>
                @error('q_5')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_6">Pouvez-vous avoir accès à internet ?</label><br>
                <input wire:model='q_6' type="radio" value="oui" id="q_6_1" name="q_6">
                <label for="q_6_1">Oui</label>
                <input wire:model='q_6' type="radio" value="non" id="q_6_2" name="q_6">
                <label for="q_6_2">Non</label>
               @error('q_6')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_7">Seriez-vous prêt à confier vos courses à une structure pour vous faire livrer chez vous à la maison sans vous déplacer ?</label><br>
                <input wire:model='q_7' type="radio" value="oui" id="q_7_1" name="q_7">
                <label for="q_7_1">Oui</label>
                <input wire:model='q_7' type="radio" value="non" id="q_7_2" name="q_7">
                <label for="q_7_2">Non</label>
                @error('q_7')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_8">Comment souhaiterez vous payer le service de livraison ?</label><br>
                <input wire:model='q_8' class="form-control" type="text" name="q_8" >
                @error('q_8')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_9">Serez-vous prêt à payer l’intégralité de votre transport à la structure pour vous faire livrer ?</label>
                <input wire:model='q_9' type="radio" value="oui" id="q_9_1" name="q_9">
                <label for="q_9_1">Oui</label>
                <input wire:model='q_9' type="radio" value="non" id="q_9_2" name="q_9">
                <label for="q_9_2">Non</label>
                @error('q_9')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_10">Aimeriez-vous qu’on fasse du semi-gros en plus de la vente en gros que nous proposons ?</label><br>
                <input wire:model='q_10' type="radio" value="oui" id="q_10_1" name="q_10">
                <label for="q_10_1">Oui</label>
                <input wire:model='q_10' type="radio" value="non" id="q_10_2" name="q_10">
                <label for="q_10_2">Non</label>
                @error('q_10')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_11">Lors de vos achats quelles sont les produits vivriers que vous achetés le plus en gros ou en demi-gros?</label>
                <input wire:model='q_11' class="form-control" type="text" name="q_11" >
                @error('q_11')<span style="color: red">{{$message}}</span>@enderror
              </div>
              <br><br><br>
              <div class="col-md-6">
                <br>
                <label for="q_12">A part cette commune  avez-vous une autre localité pour effectuer vos achats ?</label>
                <input wire:model='q_12' class="form-control" type="text" name="q_12" >
                @error('q_12')<span style="color: red">{{$message}}</span>@enderror
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-md-6">
                <select wire:model='agent' class="form-control">
                  <option value="" selected hidden>Nom de l'agent</option>
                  <option>Bamba lancine</option>
                  <option>Bayoko kadidja</option>
                  <option>Degbey kayeon</option>
                  <option>Diaby Maimouna</option>
                  <option>Kone awa</option>
                </select>
                @error('agent')<span style="color: red">{{$message}}</span>@enderror
              </div>
            </div>
              <br>  
            <button wire:click='createask()' class="btn btn-info mt-2 w-100">Save</button>
          </form>
          <br><br>
        </div>
  @endif
</div>
