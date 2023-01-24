<?php 

class FilterSearch{
    
    public static function renderSearch(){
                echo '   <div class="filter-search">
                <button id="filter-btn"> Filtrer </button>
                <label for="gsearch">Rechecher :</label>
                <input type="search" id="gsearch" name="gsearch">
            </div>
            <div class="filterBy">
                <div class="filter-option hidden">

                    <div class="filters-container">
                        <div class="fo tmpprep">
                            <label for="temp"> Temps de preparation :</label>
                            <div class="cal-in">
                                <input type="number" name="tmpprep1" id="tmpprep1" placeholder="Heures" value=0 >
                                <input type="number" name="tmpprep2" id="tmpprep2" placeholder="minutes" value=0 >
                            </div>

                        </div>

                        <div class="fo tmpcuiss">
                            <label for="temp"> Temps de cuisson :</label>
                            <div class="cal-in">
                                <input type="number" name="tmpcuiss1" id="tmpcuiss1" placeholder="Heures" value=0 >
                                <input type="number" name="tmpcuiss2" id="tmpcuiss2" placeholder="minutes" value=0 >
                            </div>
                        </div>

                        <div class="fo tmptot">
                            <label for="temp"> Temps total :</label>
                            <div class="cal-in">
                                <input type="number" name="tmptot1" id="tmptot1" placeholder="Heures" value=0 >
                                <input type="number" name="tmptot2" id="tmptot2" placeholder="minutes" value=0 >
                            </div>
                        </div>

                        <div class="fo incalories">
                            <label for="incalories"> Nombre de calories :</label>
                            <div class="cal-in">
                                <input type="number" name="minCal" id="minCal" placeholder="min">
                                <input type="number" name="maxCal" id="maxCal" placeholder="max">
                            </div>
                        </div>

                        <div class="saison">
                            <label for="temp"> Saison :</label>
                            <select name="saisons" id="saisons">
                                <option value="Automne"> Automne </option>
                                <option value="Hiver"> Hiver </option>
                                <option value="Printemps"> Printemps</option>
                                <option value="été"> été </option>
                            </select>
                        </div>

                        <div class="Notation">
                            <label for="temp"> Notation :</label>
                            <select name="saisons" id="saisons">
                                <option value="1"> 1 Étoile </option>
                                <option value="2"> 2 Étoiles </option>
                                <option value="3"> 3 Étoiles </option>
                                <option value="4"> 4 Étoiles </option>
                                <option value="4"> 5 Étoiles </option>

                            </select>
                        </div>

                    </div>


                </div>
            </div>';
    }
}
