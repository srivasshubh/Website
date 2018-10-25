int current_index = 0;
int difference = 95.5;

function circle(next_index) {
    var circles = document.getElementsByClassName("small_circle");
    document.getElementById("cont_move").style.left = ((next - current_index) * difference) + "%";
    circles[next_index].style.backgroundColor = "black";
    circles[current_index].style.backgroundColor = "grey";
    current_index = next_index;
}
