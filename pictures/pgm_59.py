import graphics.rectangle as r
from graphics.rectangle import perimeter_rect as pr
from graphics.circle import perimeter_circle as pc,area_circle
from graphics.dgraphics.cuboid import volume_cuboid as vc,area_cuboid
from graphics.dgraphics.sphere import volume_sphere as vs,area_sphere as asp
from graphics import circle
r.area_rect(2,4)
pr(2,4)
pc(3)
circle.area_circle(3)
vc(2,3,4)
area_cuboid(2,3,4)
vs(4)
asp(4)


