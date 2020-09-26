import argparse
import numpy as np
import matplotlib.pyplot as plt
ap = argparse.ArgumentParser()
ap.add_argument("-p", "--parameter", required=True, help="test1")
ap.add_argument("-o", "--other", required=True, help="test2")
ap.add_argument("-s", "--other1", required=True, help="test3")
ap.add_argument("-d", "--other2", required=True, help="test4")
args = vars(ap.parse_args())

def courbe(x1,x2,x3,x4):
    fig, ax = plt.subplots()
    x = np.linspace(-20,20)
    y = x1*x**3+x2*x**2+x3*x+x4
    plt.plot(x,y,'r')
    fig.savefig('my_plot.png',transparent=True)
    #plt.show()
    #return "fini"

print(courbe(int(args["parameter"]),int(args["other"]),int(args["other1"]),int(args["other2"])))


# dans le terminal :
# pip3 install matplotlib
# brew install python matplotlib
# pour installer les packages avec php et pouvoir les installer

# pour afficher les packages dans php :
# $output2 = shell_exec("pip3 list | grep numpy");
# echo $output2;

